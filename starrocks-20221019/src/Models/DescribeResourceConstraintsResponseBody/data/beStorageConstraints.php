<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\beStorageConstraints\diskNumberConstraint;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeResourceConstraintsResponseBody\data\beStorageConstraints\valueConstraint;

class beStorageConstraints extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var diskNumberConstraint
     */
    public $diskNumberConstraint;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $level;

    /**
     * @var valueConstraint
     */
    public $valueConstraint;
    protected $_name = [
        'desc' => 'Desc',
        'diskNumberConstraint' => 'DiskNumberConstraint',
        'isDefault' => 'IsDefault',
        'level' => 'Level',
        'valueConstraint' => 'ValueConstraint',
    ];

    public function validate()
    {
        if (null !== $this->diskNumberConstraint) {
            $this->diskNumberConstraint->validate();
        }
        if (null !== $this->valueConstraint) {
            $this->valueConstraint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->diskNumberConstraint) {
            $res['DiskNumberConstraint'] = null !== $this->diskNumberConstraint ? $this->diskNumberConstraint->toArray($noStream) : $this->diskNumberConstraint;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->valueConstraint) {
            $res['ValueConstraint'] = null !== $this->valueConstraint ? $this->valueConstraint->toArray($noStream) : $this->valueConstraint;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['DiskNumberConstraint'])) {
            $model->diskNumberConstraint = diskNumberConstraint::fromMap($map['DiskNumberConstraint']);
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['ValueConstraint'])) {
            $model->valueConstraint = valueConstraint::fromMap($map['ValueConstraint']);
        }

        return $model;
    }
}
