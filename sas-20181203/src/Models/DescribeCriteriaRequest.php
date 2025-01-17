<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCriteriaRequest extends Model
{
    /**
     * @var string
     */
    public $machineTypes;
    /**
     * @var bool
     */
    public $supportAutoTag;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
