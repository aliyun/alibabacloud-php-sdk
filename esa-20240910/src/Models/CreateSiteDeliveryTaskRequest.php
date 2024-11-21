<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\httpDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\kafkaDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\ossDelivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\s3Delivery;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\slsDelivery;
use AlibabaCloud\Tea\Model;

class CreateSiteDeliveryTaskRequest extends Model
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
     * @example user_agent,ip_adress,ip_port
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The configurations for delivery to an HTTP server.
     *
     * @var httpDelivery
     */
    public $httpDelivery;

    /**
     * @description The configurations for delivery to Kafka.
     *
     * @var kafkaDelivery
     */
    public $kafkaDelivery;

    /**
     * @description The configurations for delivery to OSS.
     *
     * @var ossDelivery
     */
    public $ossDelivery;

    /**
     * @description The configurations for delivery to Amazon S3 or an S3-compatible service.
     *
     * @var s3Delivery
     */
    public $s3Delivery;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 12312312112***
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The configurations for delivery to SLS.
     *
     * @var slsDelivery
     */
    public $slsDelivery;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     * @example dcdn-test-task
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
        'siteId'        => 'SiteId',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return CreateSiteDeliveryTaskRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
