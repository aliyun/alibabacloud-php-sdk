<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\httpDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\kafkaDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\ossDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\s3Delivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\slsDelivery;
use AlibabaCloud\Tea\Model;

class CreateUserDeliveryTaskRequest extends Model
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
     * @description This parameter is required.
     *
     * @example test_project
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType'  => 'BusinessType',
        'dataCenter'    => 'DataCenter',
        'deliveryType'  => 'DeliveryType',
        'discardRate'   => 'DiscardRate',
        'fieldName'     => 'FieldName',
        'httpDelivery'  => 'HttpDelivery',
        'kafkaDelivery' => 'KafkaDelivery',
        'ossDelivery'   => 'OssDelivery',
        's3Delivery'    => 'S3Delivery',
        'slsDelivery'   => 'SlsDelivery',
        'taskName'      => 'TaskName',
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
        if (null !== $this->httpDelivery) {
            $res['HttpDelivery'] = null !== $this->httpDelivery ? $this->httpDelivery->toMap() : null;
        }
        if (null !== $this->kafkaDelivery) {
            $res['KafkaDelivery'] = null !== $this->kafkaDelivery ? $this->kafkaDelivery->toMap() : null;
        }
        if (null !== $this->ossDelivery) {
            $res['OssDelivery'] = null !== $this->ossDelivery ? $this->ossDelivery->toMap() : null;
        }
        if (null !== $this->s3Delivery) {
            $res['S3Delivery'] = null !== $this->s3Delivery ? $this->s3Delivery->toMap() : null;
        }
        if (null !== $this->slsDelivery) {
            $res['SlsDelivery'] = null !== $this->slsDelivery ? $this->slsDelivery->toMap() : null;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserDeliveryTaskRequest
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
