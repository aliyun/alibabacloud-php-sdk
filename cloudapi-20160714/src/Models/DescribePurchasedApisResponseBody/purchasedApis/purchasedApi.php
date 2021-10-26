<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponseBody\purchasedApis;

use AlibabaCloud\Tea\Model;

class purchasedApi extends Model
{
    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $purchasedTime;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'visibility'    => 'Visibility',
        'purchasedTime' => 'PurchasedTime',
        'apiId'         => 'ApiId',
        'modifiedTime'  => 'ModifiedTime',
        'description'   => 'Description',
        'groupName'     => 'GroupName',
        'groupId'       => 'GroupId',
        'deployedTime'  => 'DeployedTime',
        'stageName'     => 'StageName',
        'apiName'       => 'ApiName',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
