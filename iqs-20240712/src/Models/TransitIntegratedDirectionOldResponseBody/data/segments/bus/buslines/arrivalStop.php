<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\arrivalStop\exit_;
use AlibabaCloud\Tea\Model;

class arrivalStop extends Model
{
    /**
     * @var exit_
     */
    public $exit;

    /**
     * @example rpe-fu181hrp24i8fc6r38fbsnn
     *
     * @var string
     */
    public $id;

    /**
     * @example 116.467430,39.997627
     *
     * @var string
     */
    public $location;

    /**
     * @example znzmo_cqz
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'exit'     => 'exit',
        'id'       => 'id',
        'location' => 'location',
        'name'     => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exit) {
            $res['exit'] = null !== $this->exit ? $this->exit->toMap() : null;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arrivalStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['exit'])) {
            $model->exit = exit_::fromMap($map['exit']);
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
