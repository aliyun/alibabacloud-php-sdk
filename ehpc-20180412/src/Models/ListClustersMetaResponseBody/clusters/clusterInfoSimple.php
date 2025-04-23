<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClustersMetaResponseBody\clusters;

use AlibabaCloud\Dara\Model;

class clusterInfoSimple extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $deployMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ehpcVersion;

    /**
     * @var bool
     */
    public $hasPlugin;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isComputeEss;

    /**
     * @var string
     */
    public $location;

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
    public $schedulerType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accountType' => 'AccountType',
        'clientVersion' => 'ClientVersion',
        'deployMode' => 'DeployMode',
        'description' => 'Description',
        'ehpcVersion' => 'EhpcVersion',
        'hasPlugin' => 'HasPlugin',
        'id' => 'Id',
        'isComputeEss' => 'IsComputeEss',
        'location' => 'Location',
        'name' => 'Name',
        'osTag' => 'OsTag',
        'schedulerType' => 'SchedulerType',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }

        if (null !== $this->hasPlugin) {
            $res['HasPlugin'] = $this->hasPlugin;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isComputeEss) {
            $res['IsComputeEss'] = $this->isComputeEss;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->schedulerType) {
            $res['SchedulerType'] = $this->schedulerType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }

        if (isset($map['HasPlugin'])) {
            $model->hasPlugin = $map['HasPlugin'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsComputeEss'])) {
            $model->isComputeEss = $map['IsComputeEss'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['SchedulerType'])) {
            $model->schedulerType = $map['SchedulerType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
