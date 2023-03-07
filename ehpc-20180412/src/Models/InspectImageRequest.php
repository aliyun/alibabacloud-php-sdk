<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class InspectImageRequest extends Model
{
    /**
     * @description The ID of the E-HPC cluster where the image whose Inspect information you want to view resides.
     *
     * @example ehpc-hz-ibug699***
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The container type of the image. Set the value to singularity.
     *
     * @example singularity
     *
     * @var string
     */
    public $containerType;

    /**
     * @description The name of the image whose Inspect information you want to view.
     *
     * @example test.sif
     *
     * @var string
     */
    public $imageName;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'containerType' => 'ContainerType',
        'imageName'     => 'ImageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->containerType) {
            $res['ContainerType'] = $this->containerType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InspectImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ContainerType'])) {
            $model->containerType = $map['ContainerType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        return $model;
    }
}
