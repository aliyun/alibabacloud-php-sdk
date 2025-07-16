<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceInstanceLabelShrinkRequest extends Model
{
    /**
     * @description Specifies whether the modification takes effect on all instances in the resource group. If you set this parameter to true, the InstanceIds parameter does not take effect.
     *
     * @example false
     *
     * @var bool
     */
    public $allInstances;

    /**
     * @description The instance IDs.
     *
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The custom tag.
     *
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'allInstances' => 'AllInstances',
        'instanceIdsShrink' => 'InstanceIds',
        'labels' => 'Labels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allInstances) {
            $res['AllInstances'] = $this->allInstances;
        }
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInstanceLabelShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllInstances'])) {
            $model->allInstances = $map['AllInstances'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        return $model;
    }
}
