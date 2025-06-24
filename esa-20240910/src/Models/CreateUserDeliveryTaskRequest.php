<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\httpDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\kafkaDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\ossDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\s3Delivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\slsDelivery;

class CreateUserDeliveryTaskRequest extends Model
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
     * @var httpDelivery
     */
    public $httpDelivery;

    /**
     * @var kafkaDelivery
     */
    public $kafkaDelivery;

    /**
     * @var ossDelivery
     */
    public $ossDelivery;

    /**
     * @var s3Delivery
     */
    public $s3Delivery;

    /**
     * @var slsDelivery
     */
    public $slsDelivery;

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
        'httpDelivery' => 'HttpDelivery',
        'kafkaDelivery' => 'KafkaDelivery',
        'ossDelivery' => 'OssDelivery',
        's3Delivery' => 'S3Delivery',
        'slsDelivery' => 'SlsDelivery',
        'taskName' => 'TaskName',
    ];

    public function validate()
    {
        if (null !== $this->httpDelivery) {
            $this->httpDelivery->validate();
        }
        if (null !== $this->kafkaDelivery) {
            $this->kafkaDelivery->validate();
        }
        if (null !== $this->ossDelivery) {
            $this->ossDelivery->validate();
        }
        if (null !== $this->s3Delivery) {
            $this->s3Delivery->validate();
        }
        if (null !== $this->slsDelivery) {
            $this->slsDelivery->validate();
        }
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

        if (null !== $this->httpDelivery) {
            $res['HttpDelivery'] = null !== $this->httpDelivery ? $this->httpDelivery->toArray($noStream) : $this->httpDelivery;
        }

        if (null !== $this->kafkaDelivery) {
            $res['KafkaDelivery'] = null !== $this->kafkaDelivery ? $this->kafkaDelivery->toArray($noStream) : $this->kafkaDelivery;
        }

        if (null !== $this->ossDelivery) {
            $res['OssDelivery'] = null !== $this->ossDelivery ? $this->ossDelivery->toArray($noStream) : $this->ossDelivery;
        }

        if (null !== $this->s3Delivery) {
            $res['S3Delivery'] = null !== $this->s3Delivery ? $this->s3Delivery->toArray($noStream) : $this->s3Delivery;
        }

        if (null !== $this->slsDelivery) {
            $res['SlsDelivery'] = null !== $this->slsDelivery ? $this->slsDelivery->toArray($noStream) : $this->slsDelivery;
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
            $model->httpDelivery = httpDelivery::fromMap($map['HttpDelivery']);
        }

        if (isset($map['KafkaDelivery'])) {
            $model->kafkaDelivery = kafkaDelivery::fromMap($map['KafkaDelivery']);
        }

        if (isset($map['OssDelivery'])) {
            $model->ossDelivery = ossDelivery::fromMap($map['OssDelivery']);
        }

        if (isset($map['S3Delivery'])) {
            $model->s3Delivery = s3Delivery::fromMap($map['S3Delivery']);
        }

        if (isset($map['SlsDelivery'])) {
            $model->slsDelivery = slsDelivery::fromMap($map['SlsDelivery']);
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
