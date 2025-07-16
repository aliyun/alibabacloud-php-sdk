<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceInstanceLabelShrinkRequest extends Model
{
    /**
     * @description Specifies whether the delete operation takes effect on all instances in the resource group. If you set this parameter to true, the InstanceIds parameter does not take effect.
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
     * @description The keys of the tags that you want to delete.
     *
     * @var string
     */
    public $keysShrink;
    protected $_name = [
        'allInstances' => 'AllInstances',
        'instanceIdsShrink' => 'InstanceIds',
        'keysShrink' => 'Keys',
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
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceInstanceLabelShrinkRequest
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
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        return $model;
    }
}
