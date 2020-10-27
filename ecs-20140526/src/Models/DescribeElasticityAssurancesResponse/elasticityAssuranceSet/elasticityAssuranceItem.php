<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponse\elasticityAssuranceSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponse\elasticityAssuranceSet\elasticityAssuranceItem\allocatedResources;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceItem extends Model
{
    /**
     * @var string
     */
    public $privatePoolOptionsId;

    /**
     * @var string
     */
    public $privatePoolOptionsName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $privatePoolOptionsMatchCriteria;

    /**
     * @var int
     */
    public $usedAssuranceTimes;

    /**
     * @var string
     */
    public $totalAssuranceTimes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $latestStartTime;

    /**
     * @var allocatedResources
     */
    public $allocatedResources;
    protected $_name = [
        'privatePoolOptionsId'            => 'PrivatePoolOptionsId',
        'privatePoolOptionsName'          => 'PrivatePoolOptionsName',
        'description'                     => 'Description',
        'regionId'                        => 'RegionId',
        'privatePoolOptionsMatchCriteria' => 'PrivatePoolOptionsMatchCriteria',
        'usedAssuranceTimes'              => 'UsedAssuranceTimes',
        'totalAssuranceTimes'             => 'TotalAssuranceTimes',
        'status'                          => 'Status',
        'startTime'                       => 'StartTime',
        'endTime'                         => 'EndTime',
        'latestStartTime'                 => 'LatestStartTime',
        'allocatedResources'              => 'AllocatedResources',
    ];

    public function validate()
    {
        Model::validateRequired('privatePoolOptionsId', $this->privatePoolOptionsId, true);
        Model::validateRequired('privatePoolOptionsName', $this->privatePoolOptionsName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('privatePoolOptionsMatchCriteria', $this->privatePoolOptionsMatchCriteria, true);
        Model::validateRequired('usedAssuranceTimes', $this->usedAssuranceTimes, true);
        Model::validateRequired('totalAssuranceTimes', $this->totalAssuranceTimes, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('latestStartTime', $this->latestStartTime, true);
        Model::validateRequired('allocatedResources', $this->allocatedResources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptionsId) {
            $res['PrivatePoolOptionsId'] = $this->privatePoolOptionsId;
        }
        if (null !== $this->privatePoolOptionsName) {
            $res['PrivatePoolOptionsName'] = $this->privatePoolOptionsName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->privatePoolOptionsMatchCriteria) {
            $res['PrivatePoolOptionsMatchCriteria'] = $this->privatePoolOptionsMatchCriteria;
        }
        if (null !== $this->usedAssuranceTimes) {
            $res['UsedAssuranceTimes'] = $this->usedAssuranceTimes;
        }
        if (null !== $this->totalAssuranceTimes) {
            $res['TotalAssuranceTimes'] = $this->totalAssuranceTimes;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->latestStartTime) {
            $res['LatestStartTime'] = $this->latestStartTime;
        }
        if (null !== $this->allocatedResources) {
            $res['AllocatedResources'] = null !== $this->allocatedResources ? $this->allocatedResources->toMap() : null;
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
        if (isset($map['PrivatePoolOptionsId'])) {
            $model->privatePoolOptionsId = $map['PrivatePoolOptionsId'];
        }
        if (isset($map['PrivatePoolOptionsName'])) {
            $model->privatePoolOptionsName = $map['PrivatePoolOptionsName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PrivatePoolOptionsMatchCriteria'])) {
            $model->privatePoolOptionsMatchCriteria = $map['PrivatePoolOptionsMatchCriteria'];
        }
        if (isset($map['UsedAssuranceTimes'])) {
            $model->usedAssuranceTimes = $map['UsedAssuranceTimes'];
        }
        if (isset($map['TotalAssuranceTimes'])) {
            $model->totalAssuranceTimes = $map['TotalAssuranceTimes'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LatestStartTime'])) {
            $model->latestStartTime = $map['LatestStartTime'];
        }
        if (isset($map['AllocatedResources'])) {
            $model->allocatedResources = allocatedResources::fromMap($map['AllocatedResources']);
        }

        return $model;
    }
}
