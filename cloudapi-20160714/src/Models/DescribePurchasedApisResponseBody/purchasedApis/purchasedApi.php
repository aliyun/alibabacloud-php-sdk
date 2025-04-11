<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApisResponseBody\purchasedApis;

use AlibabaCloud\Dara\Model;

class purchasedApi extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

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
    public $modifiedTime;

    /**
     * @var string
     */
    public $purchasedTime;

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
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'deployedTime' => 'DeployedTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'modifiedTime' => 'ModifiedTime',
        'purchasedTime' => 'PurchasedTime',
        'regionId' => 'RegionId',
        'stageName' => 'StageName',
        'visibility' => 'Visibility',
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
