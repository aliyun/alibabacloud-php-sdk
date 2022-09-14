<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters\clusterInfoSimple\computes;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters\clusterInfoSimple\managers;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters\clusterInfoSimple\totalResources;
use AlibabaCloud\SDK\EHPC\V20170714\Models\ListClustersResponseBody\clusters\clusterInfoSimple\usedResources;
use AlibabaCloud\Tea\Model;

class clusterInfoSimple extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var computes
     */
    public $computes;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $loginNodes;

    /**
     * @var managers
     */
    public $managers;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $osTag;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @var usedResources
     */
    public $usedResources;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountType'     => 'AccountType',
        'computes'        => 'Computes',
        'count'           => 'Count',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceType'    => 'InstanceType',
        'loginNodes'      => 'LoginNodes',
        'managers'        => 'Managers',
        'name'            => 'Name',
        'osTag'           => 'OsTag',
        'regionId'        => 'RegionId',
        'schedulerType'   => 'SchedulerType',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'usedResources'   => 'UsedResources',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->computes) {
            $res['Computes'] = null !== $this->computes ? $this->computes->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->loginNodes) {
            $res['LoginNodes'] = $this->loginNodes;
        }
        if (null !== $this->managers) {
            $res['Managers'] = null !== $this->managers ? $this->managers->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->usedResources) {
            $res['UsedResources'] = null !== $this->usedResources ? $this->usedResources->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfoSimple
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Computes'])) {
            $model->computes = computes::fromMap($map['Computes']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LoginNodes'])) {
            $model->loginNodes = $map['LoginNodes'];
        }
        if (isset($map['Managers'])) {
            $model->managers = managers::fromMap($map['Managers']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['UsedResources'])) {
            $model->usedResources = usedResources::fromMap($map['UsedResources']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
