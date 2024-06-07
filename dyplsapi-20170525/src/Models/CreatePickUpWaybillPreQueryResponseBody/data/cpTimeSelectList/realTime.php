<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;

use AlibabaCloud\Tea\Model;

class realTime extends Model
{
    /**
     * @description The name of the real-time order type.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $name;

    /**
     * @description The tip displayed when the real-time order cannot be placed.
     *
     * @example Exceeding the real-time ordering time range.
     *
     * @var string
     */
    public $selectDisableTip;

    /**
     * @description Indicates whether the real-time order can be placed after the deadline for placing a real-time order is reached.
     *
     * @example false
     *
     * @var bool
     */
    public $selectable;
    protected $_name = [
        'name'             => 'Name',
        'selectDisableTip' => 'SelectDisableTip',
        'selectable'       => 'Selectable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->selectDisableTip) {
            $res['SelectDisableTip'] = $this->selectDisableTip;
        }
        if (null !== $this->selectable) {
            $res['Selectable'] = $this->selectable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SelectDisableTip'])) {
            $model->selectDisableTip = $map['SelectDisableTip'];
        }
        if (isset($map['Selectable'])) {
            $model->selectable = $map['Selectable'];
        }

        return $model;
    }
}
