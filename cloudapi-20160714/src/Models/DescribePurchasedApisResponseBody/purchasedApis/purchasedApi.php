<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponseBody\purchasedApis;

use AlibabaCloud\Tea\Model;

class purchasedApi extends Model
{
    /**
     * @example eb6e54c1576d41149746e8e69b0a0792
     *
     * @var string
     */
    public $apiId;

    /**
     * @example gw_rado_tissot_
     *
     * @var string
     */
    public $apiName;

    /**
     * @example 2021-06-1113:57:38
     *
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 3013a55c0c44483f984d26df27120513
     *
     * @var string
     */
    public $groupId;

    /**
     * @example DMS_DEFAULT_GROUP_408589
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 2021-06-11T13:57:38+08:00
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 2021-06-11T13:57:38+08:00
     *
     * @var string
     */
    public $purchasedTime;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example TEST
     *
     * @var string
     */
    public $stageName;

    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'deployedTime'  => 'DeployedTime',
        'description'   => 'Description',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'modifiedTime'  => 'ModifiedTime',
        'purchasedTime' => 'PurchasedTime',
        'regionId'      => 'RegionId',
        'stageName'     => 'StageName',
        'visibility'    => 'Visibility',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
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

    /**
     * @param array $map
     *
     * @return purchasedApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
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
