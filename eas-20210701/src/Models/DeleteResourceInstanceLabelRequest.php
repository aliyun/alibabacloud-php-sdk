<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceInstanceLabelRequest extends Model
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
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The keys of the tags that you want to delete.
     *
     * @var string[]
     */
    public $keys;
    protected $_name = [
        'allInstances' => 'AllInstances',
        'instanceIds' => 'InstanceIds',
        'keys' => 'Keys',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allInstances) {
            $res['AllInstances'] = $this->allInstances;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceInstanceLabelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllInstances'])) {
            $model->allInstances = $map['AllInstances'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }

        return $model;
    }
}
