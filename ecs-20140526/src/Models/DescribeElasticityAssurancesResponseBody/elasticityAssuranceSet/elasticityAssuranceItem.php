<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceItem extends Model
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
     * @var allocatedResources
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
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
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
     * @return elasticityAssuranceItem
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
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
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
