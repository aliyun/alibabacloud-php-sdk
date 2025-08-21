<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailResponseBody\domainConfig;

class DescribeVsDomainDetailResponseBody extends Model
{
    /**
     * @var domainConfig
     */
    public $domainConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfig' => 'DomainConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainConfig) {
            $this->domainConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfig) {
            $res['DomainConfig'] = null !== $this->domainConfig ? $this->domainConfig->toArray($noStream) : $this->domainConfig;
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
        if (isset($map['DomainConfig'])) {
            $model->domainConfig = domainConfig::fromMap($map['DomainConfig']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
