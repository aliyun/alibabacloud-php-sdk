<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisBySignatureResponseBody\apiInfos;

use AlibabaCloud\Tea\Model;

class apiInfo extends Model
{
    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $apiId;

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
        'boundTime'   => 'BoundTime',
        'visibility'  => 'Visibility',
        'apiId'       => 'ApiId',
        'description' => 'Description',
        'groupName'   => 'GroupName',
        'groupId'     => 'GroupId',
        'stageName'   => 'StageName',
        'apiName'     => 'ApiName',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
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
     * @return apiInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
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
