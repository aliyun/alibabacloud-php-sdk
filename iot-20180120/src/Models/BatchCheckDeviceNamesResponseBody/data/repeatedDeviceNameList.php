<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->repeatDevieNameList)) {
            Model::validateArray($this->repeatDevieNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repeatDevieNameList) {
            if (\is_array($this->repeatDevieNameList)) {
                $res['RepeatDevieNameList'] = [];
                $n1 = 0;
                foreach ($this->repeatDevieNameList as $item1) {
                    $res['RepeatDevieNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RepeatDevieNameList'])) {
            if (!empty($map['RepeatDevieNameList'])) {
                $model->repeatDevieNameList = [];
                $n1 = 0;
                foreach ($map['RepeatDevieNameList'] as $item1) {
                    $model->repeatDevieNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
