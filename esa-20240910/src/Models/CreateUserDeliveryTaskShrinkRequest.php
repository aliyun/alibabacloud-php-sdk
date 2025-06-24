<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateUserDeliveryTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $deliveryType;

    /**
     * @var string
     */
    public $details;

    /**
     * @var float
     */
    public $discardRate;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $filterVer;

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
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter' => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'details' => 'Details',
        'discardRate' => 'DiscardRate',
        'fieldName' => 'FieldName',
        'filterVer' => 'FilterVer',
        'httpDeliveryShrink' => 'HttpDelivery',
        'kafkaDeliveryShrink' => 'KafkaDelivery',
        'ossDeliveryShrink' => 'OssDelivery',
        's3DeliveryShrink' => 'S3Delivery',
        'slsDeliveryShrink' => 'SlsDelivery',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }

        if (null !== $this->filterVer) {
            $res['FilterVer'] = $this->filterVer;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        if (isset($map['FilterVer'])) {
            $model->filterVer = $map['FilterVer'];
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
