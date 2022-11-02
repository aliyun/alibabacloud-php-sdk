<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainResponseBody\domainInfo;
use AlibabaCloud\Tea\Model;

class CreateDomainResponseBody extends Model
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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['DomainInfo'] = null !== $this->domainInfo ? $this->domainInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainResponseBody
     */
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
