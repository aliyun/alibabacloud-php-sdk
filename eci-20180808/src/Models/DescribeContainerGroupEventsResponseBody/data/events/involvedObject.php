<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events;

use AlibabaCloud\Tea\Model;

class involvedObject extends Model
{
    /**
     * @description The version of Kubernetes.
     *
     * @example v1
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The resource type.
     *
     * @example Pod
     *
     * @var string
     */
    public $kind;

    /**
     * @description The resource name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace where the resource resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The resource ID.
     *
     * @example eci-8vb5nkcq3a5cu0p3****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'kind'       => 'Kind',
        'name'       => 'Name',
        'namespace'  => 'Namespace',
        'uid'        => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return involvedObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
