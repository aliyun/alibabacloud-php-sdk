<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCriteriaRequest extends Model
{
    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: Elastic Compute Service (ECS) instance
     *
     * @example ecs
     *
     * @var string
     */
    public $machineTypes;

    /**
     * @description Specifies whether the keyword that you specify for fuzzy search can be automatically matched. default **false**, Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $supportAutoTag;

    /**
     * @description The keyword that you specify for fuzzy search when you query the asset.
     *
     * @example 47.96
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'machineTypes'   => 'MachineTypes',
        'supportAutoTag' => 'SupportAutoTag',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }
        if (null !== $this->supportAutoTag) {
            $res['SupportAutoTag'] = $this->supportAutoTag;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = $map['MachineTypes'];
        }
        if (isset($map['SupportAutoTag'])) {
            $model->supportAutoTag = $map['SupportAutoTag'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
