<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var bool
     */
    public $missing;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $updatedAtMs;
    protected $_name = [
        'missing' => 'Missing',
        'name' => 'Name',
        'path' => 'Path',
        'size' => 'Size',
        'updatedAtMs' => 'UpdatedAtMs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->missing) {
            $res['Missing'] = $this->missing;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->updatedAtMs) {
            $res['UpdatedAtMs'] = $this->updatedAtMs;
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
        if (isset($map['Missing'])) {
            $model->missing = $map['Missing'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['UpdatedAtMs'])) {
            $model->updatedAtMs = $map['UpdatedAtMs'];
        }

        return $model;
    }
}
