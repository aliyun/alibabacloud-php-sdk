<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiGroupResponseBody extends Model
{
    /**
     * @example /qqq
     *
     * @var string
     */
    public $basePath;

    /**
     * @example The weather informations
     *
     * @var string
     */
    public $description;

    /**
     * @example 523e8dc7bbe04613b5b1d726c2a7xx
     *
     * @var string
     */
    public $groupId;

    /**
     * @example Weather
     *
     * @var string
     */
    public $groupName;

    /**
     * @example apigateway-cn-v6419k43xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example VPC_SHARED
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example FF3B7D81-66AE-47E0-BF69-157DCF187514
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 523e8dc7bbe04613b5b1d726xxxxxxxx-cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $subDomain;

    /**
     * @example True
     *
     * @var bool
     */
    public $tagStatus;
    protected $_name = [
        'basePath'     => 'BasePath',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'requestId'    => 'RequestId',
        'subDomain'    => 'SubDomain',
        'tagStatus'    => 'TagStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}
