<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponseBody\domainInfo;

class ModifyDomainResponseBody extends Model
{
    /**
     * @var domainInfo
     */
    public $domainInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainInfo' => 'DomainInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainInfo) {
            $this->domainInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['DomainInfo'] = null !== $this->domainInfo ? $this->domainInfo->toArray($noStream) : $this->domainInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainInfo'])) {
            $model->domainInfo = domainInfo::fromMap($map['DomainInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
