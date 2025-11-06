<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetUserAccessTokenForPartnerRequest extends Model
{
    /**
     * @var string
     */
    public $siteHost;

    /**
     * @var string
     */
    public $ticket;
    protected $_name = [
        'siteHost' => 'SiteHost',
        'ticket' => 'Ticket',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
        }

        if (null !== $this->ticket) {
            $res['Ticket'] = $this->ticket;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }

        if (isset($map['Ticket'])) {
            $model->ticket = $map['Ticket'];
        }

        return $model;
    }
}
