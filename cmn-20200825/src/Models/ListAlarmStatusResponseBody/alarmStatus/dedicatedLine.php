<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class dedicatedLine extends Model
{
    /**
     * @example 银泰武林店_电信
     *
     * @var string
     */
    public $dedicatedLineName;

    /**
     * @var string
     */
    public $physicalSpace;
    protected $_name = [
        'dedicatedLineName' => 'DedicatedLineName',
        'physicalSpace'     => 'PhysicalSpace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedLineName) {
            $res['DedicatedLineName'] = $this->dedicatedLineName;
        }
        if (null !== $this->physicalSpace) {
            $res['PhysicalSpace'] = $this->physicalSpace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedLineName'])) {
            $model->dedicatedLineName = $map['DedicatedLineName'];
        }
        if (isset($map['PhysicalSpace'])) {
            $model->physicalSpace = $map['PhysicalSpace'];
        }

        return $model;
    }
}
