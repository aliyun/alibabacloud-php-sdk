<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListCustomImagesRequest extends Model
{
    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'baseOsTag'       => 'BaseOsTag',
        'instanceType'    => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
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
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
