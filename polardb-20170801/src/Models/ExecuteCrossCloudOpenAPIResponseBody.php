<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ExecuteCrossCloudOpenAPIResponseBody extends Model
{
    /**
     * @var string
     */
    public $proxyData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'proxyData' => 'ProxyData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->proxyData) {
            $res['ProxyData'] = $this->proxyData;
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
        if (isset($map['ProxyData'])) {
            $model->proxyData = $map['ProxyData'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
