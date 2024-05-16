<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\UpgradePrePayOrderRequest\confluentConfig;
use AlibabaCloud\Tea\Model;

class UpgradePrePayOrderRequest extends Model
{
    /**
     * @var confluentConfig
     */
    public $confluentConfig;

    /**
     * @description The size of the disk.
     *
     *   The disk size that you specify must be greater than or equal to the current disk size of the instance.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 900
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The Internet traffic for the instance.
     *
     *   The Internet traffic volume that you specify must be greater than or equal to the current Internet traffic volume of the instance.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     * > - If the **EipModel** parameter is set to **true**, set the **EipMax** parameter to a value that is greater than 0.
     * > - If the **EipModel** parameter is set to **false**, set the **EipMax** parameter to **0**.
     * @example 3
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
     * @example true
     *
     * @var bool
     */
    public $eipModel;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example alikafka_post-cn-mp919o4v****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum traffic for the instance. We recommend that you do not configure this parameter.
     *
     *   The maximum traffic volume that you specify must be greater than or equal to the current maximum traffic volume of the instance.
     *   You must configure at least one of the IoMax and IoMaxSpec parameters. If you configure both parameters, the value of the IoMaxSpec parameter takes effect. We recommend that you configure only the IoMaxSpec parameter.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 40
     *
     * @var int
     */
    public $ioMax;

    /**
     * @description The traffic specification of the instance. We recommend that you configure this parameter.
     *
     *   The traffic specification that you specify must be greater than or equal to the current traffic specification of the instance.
     *   You must configure at least one of the IoMax and IoMaxSpec parameters. If you configure both parameters, the value of the IoMaxSpec parameter takes effect. We recommend that you configure only the IoMaxSpec parameter.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example alikafka.hw.2xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @var int
     */
    public $paidType;

    /**
     * @description The number of partitions. We recommend that you configure this parameter.
     *
     *   You must specify at least one of the PartitionNum and TopicQuota parameters. We recommend that you configure only the PartitionNum parameter.
     *   If you specify both parameters, the topic-based sales model is used to check whether the PartitionNum value and the TopicQuota value are the same. If they are not the same, a failure response is returned. If they are the same, the order is placed based on the PartitionNum value.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 50
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **normal**: Standard Edition (High Write)
     *   **professional**: Professional Edition (High Write)
     *   **professionalForHighRead**: Professional Edition (High Read)
     *
     * You cannot downgrade an instance from the Professional Edition to the Standard Edition. For more information about these instance editions, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     * @example professional
     *
     * @var string
     */
    public $specType;

    /**
     * @description The number of topics. We recommend that you do not configure this parameter.
     *
     *   You must specify at least one of the PartitionNum and TopicQuota parameters. We recommend that you configure only the PartitionNum parameter.
     *   If you specify both parameters, the topic-based sales model is used to check whether the PartitionNum value and the TopicQuota value are the same. If they are not the same, a failure response is returned. If they are the same, the order is placed based on the PartitionNum value.
     *   The default value of the TopicQuota parameter varies based on the value of the IoMaxSpec parameter. If the number of topics that you consume exceeds the default value, you are charged additional fees.
     *   For more information about the valid values, see [Billing overview](https://help.aliyun.com/document_detail/84737.html).
     *
     * @example 50
     *
     * @var int
     */
    public $topicQuota;
    protected $_name = [
        'confluentConfig' => 'ConfluentConfig',
        'diskSize'        => 'DiskSize',
        'eipMax'          => 'EipMax',
        'eipModel'        => 'EipModel',
        'instanceId'      => 'InstanceId',
        'ioMax'           => 'IoMax',
        'ioMaxSpec'       => 'IoMaxSpec',
        'paidType'        => 'PaidType',
        'partitionNum'    => 'PartitionNum',
        'regionId'        => 'RegionId',
        'specType'        => 'SpecType',
        'topicQuota'      => 'TopicQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confluentConfig) {
            $res['ConfluentConfig'] = null !== $this->confluentConfig ? $this->confluentConfig->toMap() : null;
        }
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
        if (null !== $this->paidType) {
            $res['PaidType'] = $this->paidType;
        }
        if (null !== $this->partitionNum) {
            $res['PartitionNum'] = $this->partitionNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return UpgradePrePayOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfluentConfig'])) {
            $model->confluentConfig = confluentConfig::fromMap($map['ConfluentConfig']);
        }
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
        if (isset($map['PaidType'])) {
            $model->paidType = $map['PaidType'];
        }
        if (isset($map['PartitionNum'])) {
            $model->partitionNum = $map['PartitionNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
