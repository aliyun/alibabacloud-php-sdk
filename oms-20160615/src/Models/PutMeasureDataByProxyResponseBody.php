<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oms\V20160615\Models;

use AlibabaCloud\Dara\Model;

class PutMeasureDataByProxyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiType;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiType' => 'ApiType',
        'dataType' => 'DataType',
        'domainCode' => 'DomainCode',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
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
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
