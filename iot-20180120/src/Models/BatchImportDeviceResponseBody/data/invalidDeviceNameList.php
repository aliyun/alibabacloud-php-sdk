<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidDeviceNameList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceName;
    protected $_name = [
        'invalidDeviceName' => 'invalidDeviceName',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDeviceName)) {
            Model::validateArray($this->invalidDeviceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceName) {
            if (\is_array($this->invalidDeviceName)) {
                $res['invalidDeviceName'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceName as $item1) {
                    $res['invalidDeviceName'][$n1] = $item1;
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
        if (isset($map['invalidDeviceName'])) {
            if (!empty($map['invalidDeviceName'])) {
                $model->invalidDeviceName = [];
                $n1 = 0;
                foreach ($map['invalidDeviceName'] as $item1) {
                    $model->invalidDeviceName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
