<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateRspDomainServerHoldStatusOteResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $serverHoldStatus;
    protected $_name = [
        'domainName' => 'DomainName',
        'serverHoldStatus' => 'ServerHoldStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->serverHoldStatus) {
            $res['ServerHoldStatus'] = $this->serverHoldStatus;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ServerHoldStatus'])) {
            $model->serverHoldStatus = $map['ServerHoldStatus'];
        }

        return $model;
    }
}
