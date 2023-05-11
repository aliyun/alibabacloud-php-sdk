<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data;

use AlibabaCloud\Tea\Model;

class repeatedDeviceNameList extends Model
{
    /**
     * @var string[]
     */
    public $repeatDevieNameList;
    protected $_name = [
        'repeatDevieNameList' => 'RepeatDevieNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repeatDevieNameList) {
            $res['RepeatDevieNameList'] = $this->repeatDevieNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repeatedDeviceNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RepeatDevieNameList'])) {
            if (!empty($map['RepeatDevieNameList'])) {
                $model->repeatDevieNameList = $map['RepeatDevieNameList'];
            }
        }

        return $model;
    }
}
