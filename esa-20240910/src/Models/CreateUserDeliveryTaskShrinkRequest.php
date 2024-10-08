<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateUserDeliveryTaskShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description This parameter is required.
     *
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description This parameter is required.
     *
     * @example sls
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @example 0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description This parameter is required.
     *
     * @example user_agent,ip_address,ip_port
     *
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $httpDeliveryShrink;

    /**
     * @var string
     */
    public $kafkaDeliveryShrink;

    /**
     * @var string
     */
    public $ossDeliveryShrink;

    /**
     * @var string
     */
    public $s3DeliveryShrink;

    /**
     * @var string
     */
    public $slsDeliveryShrink;

    /**
     * @description This parameter is required.
     *
     * @example test_project
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType'        => 'BusinessType',
        'dataCenter'          => 'DataCenter',
        'deliveryType'        => 'DeliveryType',
        'discardRate'         => 'DiscardRate',
        'fieldName'           => 'FieldName',
        'httpDeliveryShrink'  => 'HttpDelivery',
        'kafkaDeliveryShrink' => 'KafkaDelivery',
        'ossDeliveryShrink'   => 'OssDelivery',
        's3DeliveryShrink'    => 'S3Delivery',
        'slsDeliveryShrink'   => 'SlsDelivery',
        'taskName'            => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->deliveryType) {
            $res['DeliveryType'] = $this->deliveryType;
        }
        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->httpDeliveryShrink) {
            $res['HttpDelivery'] = $this->httpDeliveryShrink;
        }
        if (null !== $this->kafkaDeliveryShrink) {
            $res['KafkaDelivery'] = $this->kafkaDeliveryShrink;
        }
        if (null !== $this->ossDeliveryShrink) {
            $res['OssDelivery'] = $this->ossDeliveryShrink;
        }
        if (null !== $this->s3DeliveryShrink) {
            $res['S3Delivery'] = $this->s3DeliveryShrink;
        }
        if (null !== $this->slsDeliveryShrink) {
            $res['SlsDelivery'] = $this->slsDeliveryShrink;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserDeliveryTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['DeliveryType'])) {
            $model->deliveryType = $map['DeliveryType'];
        }
        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['HttpDelivery'])) {
            $model->httpDeliveryShrink = $map['HttpDelivery'];
        }
        if (isset($map['KafkaDelivery'])) {
            $model->kafkaDeliveryShrink = $map['KafkaDelivery'];
        }
        if (isset($map['OssDelivery'])) {
            $model->ossDeliveryShrink = $map['OssDelivery'];
        }
        if (isset($map['S3Delivery'])) {
            $model->s3DeliveryShrink = $map['S3Delivery'];
        }
        if (isset($map['SlsDelivery'])) {
            $model->slsDeliveryShrink = $map['SlsDelivery'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
