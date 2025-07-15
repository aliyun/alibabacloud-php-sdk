<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @description Specifies whether tag authorization is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableTagAuthorization;

    /**
     * @description The instance ID. If you do not specify this parameter, all instances are returned.
     *
     * @example api-shared-vpc-001
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @description The language in which you want the description of the system policy to be returned. Valid values:
     *
     *   en: English
     *   zh: Chinese
     *   ja: Japanese
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag that is bound to the instance.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'enableTagAuthorization' => 'EnableTagAuthorization',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'language' => 'Language',
        'securityToken' => 'SecurityToken',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTagAuthorization) {
            $res['EnableTagAuthorization'] = $this->enableTagAuthorization;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
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
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableTagAuthorization'])) {
            $model->enableTagAuthorization = $map['EnableTagAuthorization'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
