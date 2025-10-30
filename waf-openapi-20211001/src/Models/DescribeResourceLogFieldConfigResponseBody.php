<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceLogFieldConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $addList;

    /**
     * @var string
     */
    public $delList;

    /**
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $extendConfig;

    /**
     * @var string
     */
    public $fieldList;

    /**
     * @var string
     */
    public $logDeliveryStrategy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addList' => 'AddList',
        'delList' => 'DelList',
        'deliveryType' => 'DeliveryType',
        'extendConfig' => 'ExtendConfig',
        'fieldList' => 'FieldList',
        'logDeliveryStrategy' => 'LogDeliveryStrategy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addList) {
            $res['AddList'] = $this->addList;
        }

        if (null !== $this->delList) {
            $res['DelList'] = $this->delList;
        }

        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }

        if (null !== $this->extendConfig) {
            $res['ExtendConfig'] = $this->extendConfig;
        }

        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }

        if (null !== $this->logDeliveryStrategy) {
            $res['LogDeliveryStrategy'] = $this->logDeliveryStrategy;
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
        if (isset($map['AddList'])) {
            $model->addList = $map['AddList'];
        }

        if (isset($map['DelList'])) {
            $model->delList = $map['DelList'];
        }

        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }

        if (isset($map['ExtendConfig'])) {
            $model->extendConfig = $map['ExtendConfig'];
        }

        if (isset($map['FieldList'])) {
            $model->fieldList = $map['FieldList'];
        }

        if (isset($map['LogDeliveryStrategy'])) {
            $model->logDeliveryStrategy = $map['LogDeliveryStrategy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
