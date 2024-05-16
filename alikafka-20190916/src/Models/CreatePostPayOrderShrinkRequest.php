<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePostPayOrderShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePostPayOrderShrinkRequest extends Model
{
    /**
     * @description The deployment mode of the instance. Valid values:
     *
     *   **4**: deploys the instance that allows access from the Internet and a VPC.
     *   **5**: deploys the instance that allows access only from a VPC.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $deployType;

    /**
     * @description The disk size.
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example 500
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The disk type. Valid values:
     *
     *   **0**: ultra disk
     *   **1**: standard SSD
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example 0
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The maximum Internet traffic in the instance.
     *
     *   If you set **DeployType** to **4**, you must configure this parameter.
     *   For information about the valid values of this parameter, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example 0
     *
     * @var int
     */
    public $eipMax;

    /**
     * @description The maximum traffic in the instance. We recommend that you do not configure this parameter.
     *
     *   You must configure at least one of IoMax and IoMaxSpec. If you configure both parameters, the value of IoMaxSpec takes effect. We recommend that you configure only IoMaxSpec.
     *   For information about the valid values of this parameter, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example 20
     *
     * @var int
     */
    public $ioMax;

    /**
     * @description The traffic specification of the instance. We recommend that you configure this parameter.
     *
     *   You must configure at least one of IoMax and IoMaxSpec. If you configure both parameters, the value of IoMaxSpec takes effect. We recommend that you configure only IoMaxSpec.
     *   For information about the valid values of this parameter, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example alikafka.hw.2xlarge
     *
     * @var string
     */
    public $ioMaxSpec;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   1: the pay-as-you-go billing method for ApsaraMQ for Kafka V2 instances.
     *   3: the pay-as-you-go billing method for serverless ApsaraMQ for Kafka V3 instances.
     *
     * @example 1
     *
     * @var int
     */
    public $paidType;

    /**
     * @description The number of partitions. We recommend that you configure this parameter.
     *
     *   You must configure one of PartitionNum and TopicQuota. We recommend that you configure only ParittionNum.
     *   If you configure PartitionNum and TopicQuota at the same time, the system verifies whether the price of the partitions equals the price of the topics based on the previous topic-based selling mode. If the price of the partitions does not equal the price of the topics, an error is returned. If the price of the partitions equals the price of the topics, the instance is purchased based on the partition number.
     *   For information about the valid values of this parameter, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
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
     * @description The ID of the resource group.
     *
     * If this parameter is left empty, the default resource group is used. You can view the resource group ID on the Resource Group page in the Resource Management console.
     * @example rg-ac***********7q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The parameters configured for the serverless ApsaraMQ for Kafka V3 instance. When you create a Serverless ApsaraMQ for Kafka V3 serverless instance, you must configure these parameters.
     *
     * @var string
     */
    public $serverlessConfigShrink;

    /**
     * @description The instance edition.
     *
     * Valid values if you set PaidType to 1:
     *
     *   normal: Standard Edition (High Write)
     *   professional: Professional Edition (High Write)
     *   professionalForHighRead: Professional Edition (High Read)
     *
     * Valid values if you set PaidType to 3:
     *
     *   normal: Serverless Standard Edition
     *   professional: Serverless Professional Edition
     *
     * For more information about the instance editions, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     * @example normal
     *
     * @var string
     */
    public $specType;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The number of topics. We recommend that you do not configure this parameter.
     *
     *   You must configure one of PartitionNum and TopicQuota. We recommend that you configure only ParittionNum.
     *   If you configure PartitionNum and TopicQuota at the same time, the system verifies whether the price of the partitions equals the price of the topics based on the previous topic-based selling mode. If the price of the partitions does not equal the price of the topics, an error is returned. If the price of the partitions equals the price of the topics, the instance is purchased based on the partition number.
     *   The default value of TopicQuota varies based on the value of IoMaxSpec. If the number of topics that you consume exceeds the default value, you are charged additional fees.
     *   For information about the valid values of this parameter, see [Billing](https://help.aliyun.com/document_detail/84737.html).
     *
     * >  If you create a serverless ApsaraMQ for Kafka V3 instance, you do not need to configure this parameter.
     * @example 50
     *
     * @var int
     */
    public $topicQuota;
    protected $_name = [
        'deployType'             => 'DeployType',
        'diskSize'               => 'DiskSize',
        'diskType'               => 'DiskType',
        'eipMax'                 => 'EipMax',
        'ioMax'                  => 'IoMax',
        'ioMaxSpec'              => 'IoMaxSpec',
        'paidType'               => 'PaidType',
        'partitionNum'           => 'PartitionNum',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'serverlessConfigShrink' => 'ServerlessConfig',
        'specType'               => 'SpecType',
        'tag'                    => 'Tag',
        'topicQuota'             => 'TopicQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->eipMax) {
            $res['EipMax'] = $this->eipMax;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverlessConfigShrink) {
            $res['ServerlessConfig'] = $this->serverlessConfigShrink;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topicQuota) {
            $res['TopicQuota'] = $this->topicQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePostPayOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EipMax'])) {
            $model->eipMax = $map['EipMax'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfigShrink = $map['ServerlessConfig'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopicQuota'])) {
            $model->topicQuota = $map['TopicQuota'];
        }

        return $model;
    }
}
