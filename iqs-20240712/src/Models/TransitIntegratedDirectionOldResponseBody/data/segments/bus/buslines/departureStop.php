<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines;

use AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionOldResponseBody\data\segments\bus\buslines\departureStop\entrance;
use AlibabaCloud\Tea\Model;

class departureStop extends Model
{
    /**
     * @var entrance
     */
    public $entrance;

    /**
     * @example st-628f075f-11638689
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
     * @example 1597871211794192-1700571612867-LcFKnaDJRsoAsYpltZzfrc7Ts0TY1DYOrID+QVy0WxxxPOY8+bod62GWhHB1NK1lITs5tu2zIwknT3R9S8XCAA
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'entrance' => 'entrance',
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
        if (null !== $this->entrance) {
            $res['entrance'] = null !== $this->entrance ? $this->entrance->toMap() : null;
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
     * @return departureStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entrance'])) {
            $model->entrance = entrance::fromMap($map['entrance']);
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
