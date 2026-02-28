<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data;

use AlibabaCloud\Dara\Model;

class invalidDeviceSecretList extends Model
{
    /**
     * @var string[]
     */
    public $invalidDeviceSecret;
    protected $_name = [
        'invalidDeviceSecret' => 'invalidDeviceSecret',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDeviceSecret)) {
            Model::validateArray($this->invalidDeviceSecret);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDeviceSecret) {
            if (\is_array($this->invalidDeviceSecret)) {
                $res['invalidDeviceSecret'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceSecret as $item1) {
                    $res['invalidDeviceSecret'][$n1] = $item1;
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
        if (isset($map['invalidDeviceSecret'])) {
            if (!empty($map['invalidDeviceSecret'])) {
                $model->invalidDeviceSecret = [];
                $n1 = 0;
                foreach ($map['invalidDeviceSecret'] as $item1) {
                    $model->invalidDeviceSecret[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
