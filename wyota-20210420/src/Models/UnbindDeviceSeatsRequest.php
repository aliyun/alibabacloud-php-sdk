<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class UnbindDeviceSeatsRequest extends Model
{
    /**
     * @var string[]
     */
    public $serialNoList;
    protected $_name = [
        'serialNoList' => 'SerialNoList',
    ];

    public function validate()
    {
        if (\is_array($this->serialNoList)) {
            Model::validateArray($this->serialNoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serialNoList) {
            if (\is_array($this->serialNoList)) {
                $res['SerialNoList'] = [];
                $n1 = 0;
                foreach ($this->serialNoList as $item1) {
                    $res['SerialNoList'][$n1] = $item1;
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
        if (isset($map['SerialNoList'])) {
            if (!empty($map['SerialNoList'])) {
                $model->serialNoList = [];
                $n1 = 0;
                foreach ($map['SerialNoList'] as $item1) {
                    $model->serialNoList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
