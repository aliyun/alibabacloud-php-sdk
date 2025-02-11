<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeJobResourceUsageResponseBody\data\jobAcuUsage\acuUsageDetail;

class jobAcuUsage extends Model
{
    /**
     * @var acuUsageDetail
     */
    public $acuUsageDetail;
    /**
     * @var string
     */
    public $jobEndTime;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $jobStartTime;
    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'acuUsageDetail'    => 'AcuUsageDetail',
        'jobEndTime'        => 'JobEndTime',
        'jobId'             => 'JobId',
        'jobStartTime'      => 'JobStartTime',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        if (null !== $this->acuUsageDetail) {
            $this->acuUsageDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acuUsageDetail) {
            $res['AcuUsageDetail'] = null !== $this->acuUsageDetail ? $this->acuUsageDetail->toArray($noStream) : $this->acuUsageDetail;
        }

        if (null !== $this->jobEndTime) {
            $res['JobEndTime'] = $this->jobEndTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobStartTime) {
            $res['JobStartTime'] = $this->jobStartTime;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
        if (isset($map['AcuUsageDetail'])) {
            $model->acuUsageDetail = acuUsageDetail::fromMap($map['AcuUsageDetail']);
        }

        if (isset($map['JobEndTime'])) {
            $model->jobEndTime = $map['JobEndTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobStartTime'])) {
            $model->jobStartTime = $map['JobStartTime'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
