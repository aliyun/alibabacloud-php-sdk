<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateApiGroupResponseBody extends Model
{
    /**
     * @var bool
     */
    public $tagStatus;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $requestId;

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
    public $instanceId;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'tagStatus'    => 'TagStatus',
        'basePath'     => 'BasePath',
        'requestId'    => 'RequestId',
        'description'  => 'Description',
        'groupName'    => 'GroupName',
        'groupId'      => 'GroupId',
        'instanceId'   => 'InstanceId',
        'subDomain'    => 'SubDomain',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
