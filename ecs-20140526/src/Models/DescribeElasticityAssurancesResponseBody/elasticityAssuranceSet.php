<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\allocatedResources;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceSet extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var int
     */
    public $usedAssuranceTimes;

    /**
     * @var string
     */
    public $latestStartTime;

    /**
     * @var allocatedResources[]
     */
    public $allocatedResources;

    /**
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $totalAssuranceTimes;
    protected $_name = [
        'status'                          => 'Status',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'usedAssuranceTimes'              => 'UsedAssuranceTimes',
        'latestStartTime'                 => 'LatestStartTime',
        'allocatedResources'              => 'AllocatedResources',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'regionId'                        => 'RegionId',
        'endTime'                         => 'EndTime',
        'startTime'                       => 'StartTime',
        'description'                     => 'Description',
        'totalAssuranceTimes'             => 'TotalAssuranceTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->usedAssuranceTimes) {
            $res['UsedAssuranceTimes'] = $this->usedAssuranceTimes;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
        }
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = [];
            if (null !== $this->allocatedResources && \is_array($this->allocatedResources)) {
                $n = 0;
                foreach ($this->allocatedResources as $item) {
                    $res['AllocatedResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->totalAssuranceTimes) {
            $res['TotalAssuranceTimes'] = $this->totalAssuranceTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['UsedAssuranceTimes'])) {
            $model->usedAssuranceTimes = $map['UsedAssuranceTimes'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
        }
        if (isset($map['AllocatedResources'])) {
            if (!empty($map['AllocatedResources'])) {
                $model->allocatedResources = [];
                $n                         = 0;
                foreach ($map['AllocatedResources'] as $item) {
                    $model->allocatedResources[$n++] = null !== $item ? allocatedResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TotalAssuranceTimes'])) {
            $model->totalAssuranceTimes = $map['TotalAssuranceTimes'];
        }

        return $model;
    }
}
