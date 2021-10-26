<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedApisResponseBody\authorizedApis;

use AlibabaCloud\Tea\Model;

class authorizedApi extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $authorizationSource;

    /**
     * @var string
     */
    public $authVaildTime;

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
    public $authorizedTime;

    /**
     * @var string
     */
    public $operator;

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
        'apiId'               => 'ApiId',
        'authorizationSource' => 'AuthorizationSource',
        'authVaildTime'       => 'AuthVaildTime',
        'description'         => 'Description',
        'groupName'           => 'GroupName',
        'groupId'             => 'GroupId',
        'authorizedTime'      => 'AuthorizedTime',
        'operator'            => 'Operator',
        'stageName'           => 'StageName',
        'apiName'             => 'ApiName',
        'regionId'            => 'RegionId',
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
        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
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
        if (null !== $this->authorizedTime) {
            $res['AuthorizedTime'] = $this->authorizedTime;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
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
     * @return authorizedApi
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
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
        if (isset($map['AuthorizedTime'])) {
            $model->authorizedTime = $map['AuthorizedTime'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
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
