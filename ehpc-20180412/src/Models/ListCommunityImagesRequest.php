<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListCommunityImagesRequest extends Model
{
    /**
     * @description The tag of the base operating system (BOS).
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The ID of the cluster. If the cluster supports multiple operating systems, all community images in the region where the cluster resides are queried.
     *
     * If you do not specify the cluster ID, the community images that are supported by all clusters are queried.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the Elastic Compute Service (ECS) instance. If you do not specify the instance type, the community images that are supported by all instance types are queried.
     *
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'baseOsTag'    => 'BaseOsTag',
        'clusterId'    => 'ClusterId',
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommunityImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
