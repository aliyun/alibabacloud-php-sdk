<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateApiGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateApiGroupRequest extends Model
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
     * @description The description of the API group. The description can be up to 180 characters in length.
     *
     * @example The weather informations.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the API group. The name must be globally unique. The name must be 4 to 50 characters in length. It must start with a letter and can contain letters, digits, and underscores (\_).
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
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag of objects that match the lifecycle rule. You can specify multiple tags.
     *
     * @example Key， Value
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'basePath'      => 'BasePath',
        'description'   => 'Description',
        'groupName'     => 'GroupName',
        'instanceId'    => 'InstanceId',
        'securityToken' => 'SecurityToken',
        'tag'           => 'Tag',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApiGroupRequest
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
