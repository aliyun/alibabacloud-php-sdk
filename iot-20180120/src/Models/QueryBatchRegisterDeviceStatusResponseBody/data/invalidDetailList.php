<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryBatchRegisterDeviceStatusResponseBody\data\invalidDetailList\invalidDetailList;

class invalidDetailList extends Model
{
    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;
    protected $_name = [
        'invalidDetailList' => 'invalidDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDetailList)) {
            Model::validateArray($this->invalidDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            if (\is_array($this->invalidDetailList)) {
                $res['invalidDetailList'] = [];
                $n1 = 0;
                foreach ($this->invalidDetailList as $item1) {
                    $res['invalidDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['invalidDetailList'])) {
            if (!empty($map['invalidDetailList'])) {
                $model->invalidDetailList = [];
                $n1 = 0;
                foreach ($map['invalidDetailList'] as $item1) {
                    $model->invalidDetailList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
