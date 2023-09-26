<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeAppsByApiResponseBody\appApiRelationInfos;

use AlibabaCloud\Tea\Model;

class appApiRelationInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authVaildTime;

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
    public $operator;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'authVaildTime'       => 'AuthVaildTime',
        'authorizationSource' => 'AuthorizationSource',
        'createdTime'         => 'CreatedTime',
        'description'         => 'Description',
        'operator'            => 'Operator',
        'stageName'           => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->authVaildTime) {
            $res['AuthVaildTime'] = $this->authVaildTime;
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
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appApiRelationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AuthVaildTime'])) {
            $model->authVaildTime = $map['AuthVaildTime'];
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
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
