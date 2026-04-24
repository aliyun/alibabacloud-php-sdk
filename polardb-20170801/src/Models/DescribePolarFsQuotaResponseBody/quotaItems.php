<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class quotaItems extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var int
     */
    public $inodes;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $usedCapacity;

    /**
     * @var int
     */
    public $usedInodes;
    protected $_name = [
        'capacity' => 'Capacity',
        'inodes' => 'Inodes',
        'path' => 'Path',
        'usedCapacity' => 'UsedCapacity',
        'usedInodes' => 'UsedInodes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->inodes) {
            $res['Inodes'] = $this->inodes;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
        }

        if (null !== $this->usedInodes) {
            $res['UsedInodes'] = $this->usedInodes;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['Inodes'])) {
            $model->inodes = $map['Inodes'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        if (isset($map['UsedInodes'])) {
            $model->usedInodes = $map['UsedInodes'];
        }

        return $model;
    }
}
