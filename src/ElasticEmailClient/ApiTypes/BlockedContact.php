<?php
namespace ElasticEmailClient\ApiTypes;

/**
 * Blocked Contact - Contact returning Hard Bounces
 */
class BlockedContact
{
    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * Name of status: Active, Engaged, Inactive, Abuse, Bounced, Unsubscribed.
     */
    public /*string*/ $Status;

    /**
     * RFC error message
     */
    public /*string*/ $FriendlyErrorMessage;

    /**
     * Last change date
     */
    public /*string*/ $DateUpdated;

}