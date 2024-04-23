<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class UpgradePostPayOrderShrinkRequest extends Model
{
    /**
     * @description The disk size. Unit: GB.
     *
     *   The disk size that you specify must be greater than or equal to the current disk size of the instance.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >  When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     * @example 500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The Internet traffic for the instance.
     *
     *   The Internet traffic that you specify must be greater than or equal to the current Internet traffic of the instance.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >
     *
     *   If you set **EipModel** to **true**, set **EipMax** to a value that is greater than 0.
     *
     *   If you set **EipModel** to **false**, set **EipMax** to **0**.
     *
     *   When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $eipMax;

    /**
     * @description Specifies whether to enable Internet access for the instance. Valid values:
     *
     *   true: enables Internet access.
     *   false: disables Internet access.
     *
     * @example false
     *
     * @var bool
     */
    public $eipModel;

    /**
     * @description The instance ID.
     *
     * @example alikafka_post-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum traffic for the instance. We recommend that you do not configure this parameter.
     *
     *   The maximum traffic that you specify must be greater than or equal to the current maximum traffic of the instance.
     *   You must configure at least one of IoMax and IoMaxSpec. If you configure both parameters, the value of IoMaxSpec takes effect. We recommend that you configure only IoMaxSpec.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >  When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     * @example 60
     *
     * @var int
     */
    public $ioMax;

    /**
     * @description The traffic specification of the instance. We recommend that you configure this parameter.
     *
     *   The traffic specification that you specify must be greater than or equal to the current traffic specification of the instance.
     *   You must configure at least one of IoMax and IoMaxSpec. If you configure both parameters, the value of IoMaxSpec takes effect. We recommend that you configure only IoMaxSpec.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >  When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     * @example alikafka.hw.6xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @description The number of partitions. We recommend that you configure this parameter.
     *
     *   You must configure one of PartitionNum and TopicQuota. We recommend that you configure only ParittionNum.
     *   If you configure PartitionNum and TopicQuota at the same time, the system verifies whether the price of the partitions equals the price of the topics based on the previous topic-based selling mode. If the price of the partitions does not equal the price of the topics, an error is returned. If the price of the partitions equals the price of the topics, the instance is purchased based on the partition number.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >  When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     * @example 80
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The parameters configured for the Serverless instance. When you create an ApsaraMQ for Kafka V3 serverless instance, you must configure these parameters.
     *
     * @var string
     */
    public $serverlessConfigShrink;

    /**
     * @description The instance edition.
     *
     * Valid values for this parameter if you set PaidType to 1:
     *
     *   normal: Standard Edition (High Write)
     *   professional: Professional Edition (High Write)
     *   professionalForHighRead: Professional Edition (High Read)
     *
     * Valid values for this parameter if you set PaidType to 3:
     *
     *   normal: Serverless Standard Edition
     *   professional: Serverless Professional Edition
     *
     * For more information, see [Billing](~~84737~~).
     * @example professional
     *
     * @var string
     */
    public $specType;

    /**
     * @description The number of topics. We recommend that you do not configure this parameter.
     *
     *   You must configure one of PartitionNum and TopicQuota. We recommend that you configure only ParittionNum.
     *   If you configure PartitionNum and TopicQuota at the same time, the system verifies whether the price of the partitions equals the price of the topics based on the previous topic-based selling mode. If the price of the partitions does not equal the price of the topics, an error is returned. If the price of the partitions equals the price of the topics, the instance is purchased based on the partition number.
     *   The default value of TopicQuota varies based on the value of IoMaxSpec. If the number of topics that you consume exceeds the default value, you are charged additional fees.
     *   For information about the valid values of this parameter, see [Billing](~~84737~~).
     *
     * >  When you create an ApsaraMQ for Kafka V3 serverless instance, you do not need to configure this parameter.
     * @example 80
     *
     * @var int
     */
    public $topicQuota;
    protected $_name = [
        'diskSize'               => 'DiskSize',
        'eipMax'                 => 'EipMax',
        'eipModel'               => 'EipModel',
        'instanceId'             => 'InstanceId',
        'ioMax'                  => 'IoMax',
        'ioMaxSpec'              => 'IoMaxSpec',
        'partitionNum'           => 'PartitionNum',
        'regionId'               => 'RegionId',
        'serverlessConfigShrink' => 'ServerlessConfig',
        'specType'               => 'SpecType',
        'topicQuota'             => 'TopicQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
        }
        if (null !== $this->eipModel) {
            $res['EipModel'] = $this->eipModel;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ioMax) {
            $res['IoMax'] = $this->ioMax;
        }
        if (null !== $this->ioMaxSpec) {
            $res['IoMaxSpec'] = $this->ioMaxSpec;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverlessConfigShrink) {
            $res['ServerlessConfig'] = $this->serverlessConfigShrink;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradePostPayOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
        }
        if (isset($map['EipModel'])) {
            $model->eipModel = $map['EipModel'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IoMax'])) {
            $model->ioMax = $map['IoMax'];
        }
        if (isset($map['IoMaxSpec'])) {
            $model->ioMaxSpec = $map['IoMaxSpec'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfigShrink = $map['ServerlessConfig'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }

        return $model;
    }
}
