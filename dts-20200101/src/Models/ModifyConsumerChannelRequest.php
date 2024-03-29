<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumerChannelRequest extends Model
{
    /**
     * @description The ID of the consumer group. You can call the [DescribeConsumerChannel](~~264169~~) operation to query the consumer group ID.
     *
     * @example dtsor2y66j4219****
     *
     * @var string
     */
    public $consumerGroupId;

    /**
     * @description The name of the consumer group. The name cannot exceed 128 characters in length. We recommend that you use an informative name for easy identification.
     *
     * @var string
     */
    public $consumerGroupName;

    /**
     * @description The new password of the consumer group.
     *
     *   A password must contain two or more of the following characters: uppercase letters, lowercase letters, digits, and special characters.
     *   A password must be 8 to 32 characters in length.
     *
     * @example Test123456
     *
     * @var string
     */
    public $consumerGroupPassword;

    /**
     * @description The new username of the consumer group.
     *
     *   A username can contain one or more of the following character types: uppercase letters, lowercase letters, digits, and underscores (\_).
     *   A username cannot exceed 16 characters in length.
     *
     * @example dtstest
     *
     * @var string
     */
    public $consumerGroupUserName;

    /**
     * @description The ID of the change tracking instance. You can call the [DescribeDtsJobs](~~209702~~) operation to query the instance ID.
     *
     * >  You must specify at least one of the **DtsInstanceId** and **DtsJobId** parameters.
     * @example dtsboss6pn1w73****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the change tracking task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * >  You must specify at least one of the **DtsInstanceId** and **DtsJobId** parameters.
     * @example boss6pn1w73****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the region where the change tracking instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'consumerGroupId'       => 'ConsumerGroupId',
        'consumerGroupName'     => 'ConsumerGroupName',
        'consumerGroupPassword' => 'ConsumerGroupPassword',
        'consumerGroupUserName' => 'ConsumerGroupUserName',
        'dtsInstanceId'         => 'DtsInstanceId',
        'dtsJobId'              => 'DtsJobId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['ConsumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->consumerGroupName) {
            $res['ConsumerGroupName'] = $this->consumerGroupName;
        }
        if (null !== $this->consumerGroupPassword) {
            $res['ConsumerGroupPassword'] = $this->consumerGroupPassword;
        }
        if (null !== $this->consumerGroupUserName) {
            $res['ConsumerGroupUserName'] = $this->consumerGroupUserName;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyConsumerChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
        }
        if (isset($map['ConsumerGroupName'])) {
            $model->consumerGroupName = $map['ConsumerGroupName'];
        }
        if (isset($map['ConsumerGroupPassword'])) {
            $model->consumerGroupPassword = $map['ConsumerGroupPassword'];
        }
        if (isset($map['ConsumerGroupUserName'])) {
            $model->consumerGroupUserName = $map['ConsumerGroupUserName'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
