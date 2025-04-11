<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisWithStageNameIntegratedByAppResponseBody\appApiRelationInfos;

use AlibabaCloud\Dara\Model;

class appApiRelationInfo extends Model
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
    public $authorizationSource;

    /**
     * @var string
     */
    public $createdTime;

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
    public $method;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $stageNameAndAuth;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'authorizationSource' => 'AuthorizationSource',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'method' => 'Method',
        'operator' => 'Operator',
        'path' => 'Path',
        'regionId' => 'RegionId',
        'stageNameAndAuth' => 'StageNameAndAuth',
    ];

    public function validate()
    {
        if (\is_array($this->stageNameAndAuth)) {
            Model::validateArray($this->stageNameAndAuth);
        }
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

        if (null !== $this->authorizationSource) {
            $res['AuthorizationSource'] = $this->authorizationSource;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stageNameAndAuth) {
            if (\is_array($this->stageNameAndAuth)) {
                $res['StageNameAndAuth'] = [];
                foreach ($this->stageNameAndAuth as $key1 => $value1) {
                    $res['StageNameAndAuth'][$key1] = $value1;
                }
            }
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

        if (isset($map['AuthorizationSource'])) {
            $model->authorizationSource = $map['AuthorizationSource'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StageNameAndAuth'])) {
            if (!empty($map['StageNameAndAuth'])) {
                $model->stageNameAndAuth = [];
                foreach ($map['StageNameAndAuth'] as $key1 => $value1) {
                    $model->stageNameAndAuth[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
