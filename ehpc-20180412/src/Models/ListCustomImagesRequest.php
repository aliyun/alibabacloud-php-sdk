<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListCustomImagesRequest extends Model
{
    /**
     * @description The image tag of the base operating system. The tag is used only by the management node.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The ID of the cluster where the application resides. If the cluster supports multiple operating systems, all the images in the region where the cluster resides are queried.
     *
     * By default, if you do not specify the cluster ID, the images that are supported by all the clusters is queried.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The source of the image. Valid values:
     *
     *   self: custom image
     *   others: shared image
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description Specify the type of the instance. By default, if you do not specify the type of the instance, the list of images that are supported by all the instance types are queried.
     *
     * @example ecs.n1.tiny
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'baseOsTag'       => 'BaseOsTag',
        'clusterId'       => 'ClusterId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'instanceType'    => 'InstanceType',
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
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomImagesRequest
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
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
