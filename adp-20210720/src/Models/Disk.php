<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class Disk extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $fsType;

    /**
     * @var string
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $remain;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'capacity'   => 'capacity',
        'fsType'     => 'fsType',
        'mountPoint' => 'mountPoint',
        'name'       => 'name',
        'remain'     => 'remain',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['capacity'] = $this->capacity;
        }
        if (null !== $this->fsType) {
            $res['fsType'] = $this->fsType;
        }
        if (null !== $this->mountPoint) {
            $res['mountPoint'] = $this->mountPoint;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->remain) {
            $res['remain'] = $this->remain;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capacity'])) {
            $model->capacity = $map['capacity'];
        }
        if (isset($map['fsType'])) {
            $model->fsType = $map['fsType'];
        }
        if (isset($map['mountPoint'])) {
            $model->mountPoint = $map['mountPoint'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['remain'])) {
            $model->remain = $map['remain'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
