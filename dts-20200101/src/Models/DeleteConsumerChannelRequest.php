<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteConsumerChannelRequest extends Model
{
    /**
     * @description The ID of the consumer group. You can call the [DescribeConsumerChannel](~~264169~~) operation to query the consumer group ID.
     *
     * @example dtsktbb6jdn2******
     *
     * @var string
     */
    public $consumerGroupId;

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
    protected $_name = [
        'consumerGroupId' => 'ConsumerGroupId',
        'dtsInstanceId'   => 'DtsInstanceId',
        'dtsJobId'        => 'DtsJobId',
        'regionId'        => 'RegionId',
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
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteConsumerChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroupId'])) {
            $model->consumerGroupId = $map['ConsumerGroupId'];
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

        return $model;
    }
}
