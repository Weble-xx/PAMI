<?php
/**
 * Show PHSIP Registrations
 *
 *
 */
namespace PAMI\Message\Action;

/**
 * Show pjsip registrations
 *
 * PHP Version 
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Markus Fohrer <markus.fohrer@webked.de>
 */
class SIPPeersAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct('PJSIPShowRegistrations');
    }
}
