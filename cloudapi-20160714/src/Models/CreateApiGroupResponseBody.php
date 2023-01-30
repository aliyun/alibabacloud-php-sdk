<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiGroupResponseBody extends Model
{
    /**
     * @description The root path of the API.
     *
     * @example /qqq
     *
     * @var string
     */
    public $basePath;

    /**
     * @description The description of the API group.
     *
     * @example The weather informations
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group to which the domain name to be deleted is bound. This ID is generated by the system and globally unique.
     *
     * @example 523e8dc7bbe04613b5b1d726c2a7xx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group to which an API belongs.
     *
     * @example Weather
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the instance.
     *
     * @example apigateway-cn-v6419k43xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance.
     *
     *   CLASSIC_SHARED: shared instance that uses the classic network configuration
     *   VPC_SHARED: shared instance that uses VPC
     *   VPC_DEDICATED: dedicated instance that uses VPC
     *
     * @example VPC_SHARED
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the request.
     *
     * @example FF3B7D81-66AE-47E0-BF69-157DCF187514
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The second-level domain name bound to the API group. This domain name is used to test API calls.
     *
     * @example 523e8dc7bbe04613b5b1d726xxxxxxxx-cn-hangzhou.alicloudapi.com
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description Indicates whether the tag exists. If the value is **true**, the tag exists. If the value is **false**, the tag does not exist.
     *
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
