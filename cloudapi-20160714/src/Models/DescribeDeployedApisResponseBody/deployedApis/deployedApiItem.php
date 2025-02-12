<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApisResponseBody\deployedApis;

use AlibabaCloud\Dara\Model;

class deployedApiItem extends Model
{
    /**
     * @var string
     */
    public $apiId;
    /**
     * @var string
     */
    public $apiMethod;
    /**
     * @var string
     */
    public $apiName;
    /**
     * @var string
     */
    public $apiPath;
    /**
     * @var string
     */
    public $deployedTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $stageName;
    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'        => 'ApiId',
        'apiMethod'    => 'ApiMethod',
        'apiName'      => 'ApiName',
        'apiPath'      => 'ApiPath',
        'deployedTime' => 'DeployedTime',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'regionId'     => 'RegionId',
        'stageName'    => 'StageName',
        'visibility'   => 'Visibility',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiMethod) {
            $res['ApiMethod'] = $this->apiMethod;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }

        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiMethod'])) {
            $model->apiMethod = $map['ApiMethod'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }

        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
