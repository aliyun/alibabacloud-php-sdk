<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidSnList extends Model
{
    /**
     * @var string[]
     */
    public $invalidSn;
    protected $_name = [
        'invalidSn' => 'invalidSn',
    ];

    public function validate()
    {
        if (\is_array($this->invalidSn)) {
            Model::validateArray($this->invalidSn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidSn) {
            if (\is_array($this->invalidSn)) {
                $res['invalidSn'] = [];
                $n1 = 0;
                foreach ($this->invalidSn as $item1) {
                    $res['invalidSn'][$n1] = $item1;
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
        if (isset($map['invalidSn'])) {
            if (!empty($map['invalidSn'])) {
                $model->invalidSn = [];
                $n1 = 0;
                foreach ($map['invalidSn'] as $item1) {
                    $model->invalidSn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
