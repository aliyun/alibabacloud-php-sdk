<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteDeliveryTaskShrinkRequest extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   **dcdn_log_access_l1** (default): access logs.
     *   **dcdn_log_er**: Edge Routine logs.
     *   **dcdn_log_waf**: firewall logs.
     *   **dcdn_log_ipa**: TCP/UDP proxy logs.
     *
     * This parameter is required.
     *
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The data center. Valid values:
     *
     *   cn: the Chinese mainland.
     *   oversea: outside the Chinese mainland.
     *
     * This parameter is required.
     *
     * @example cn
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The destination of the delivery. Valid values:
     *
     *   sls: Alibaba Cloud Simple Log Service (SLS).
     *   http: HTTP server.
     *   aws3: Amazon Simple Storage Service (S3).
     *   oss: Alibaba Cloud Object Storage Service (OSS).
     *   kafka: Kafka.
     *   aws3cmpt: S3-compatible storage service.
     *
     * This parameter is required.
     *
     * @example sls
     *
     * @var string
     */
    public $deliveryType;

    /**
     * @description The discard rate. Default value: 0.
     *
     * @example 0.0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description The log fields, which are separated by commas (,).
     *
     * This parameter is required.
     *
     * @example user_agent,ip_adress,ip_port
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The configurations for delivery to an HTTP server.
     *
     * @var string
     */
    public $httpDeliveryShrink;

    /**
     * @description The configurations for delivery to Kafka.
     *
     * @var string
     */
    public $kafkaDeliveryShrink;

    /**
     * @description The configurations for delivery to OSS.
     *
     * @var string
     */
    public $ossDeliveryShrink;

    /**
     * @description The configurations for delivery to Amazon S3 or an S3-compatible service.
     *
     * @var string
     */
    public $s3DeliveryShrink;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 12312312112***
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The configurations for delivery to SLS.
     *
     * @var string
     */
    public $slsDeliveryShrink;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     *
     * @example dcdn-test-task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'dataCenter' => 'DataCenter',
        'deliveryType' => 'DeliveryType',
        'discardRate' => 'DiscardRate',
        'fieldName' => 'FieldName',
        'httpDeliveryShrink' => 'HttpDelivery',
        'kafkaDeliveryShrink' => 'KafkaDelivery',
        'ossDeliveryShrink' => 'OssDelivery',
        's3DeliveryShrink' => 'S3Delivery',
        'siteId' => 'SiteId',
        'slsDeliveryShrink' => 'SlsDelivery',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return CreateSiteDeliveryTaskShrinkRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
