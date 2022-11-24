<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class BatchResourceSetting extends Model
{
    /**
     * @var BasicResourceSetting
     */
    public $basicResourceSetting;

    /**
     * @var int
     */
    public $maxSlot;
    protected $_name = [
        'basicResourceSetting' => 'basicResourceSetting',
        'maxSlot'              => 'maxSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toMap() : null;
        }
        if (null !== $this->maxSlot) {
            $res['maxSlot'] = $this->maxSlot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchResourceSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['basicResourceSetting'])) {
            $model->basicResourceSetting = BasicResourceSetting::fromMap($map['basicResourceSetting']);
        }
        if (isset($map['maxSlot'])) {
            $model->maxSlot = $map['maxSlot'];
        }

        return $model;
    }
}
