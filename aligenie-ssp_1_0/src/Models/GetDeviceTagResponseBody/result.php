<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $deviceTags;
    protected $_name = [
        'deviceTags' => 'DeviceTags',
    ];

    public function validate()
    {
        if (\is_array($this->deviceTags)) {
            Model::validateArray($this->deviceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceTags) {
            if (\is_array($this->deviceTags)) {
                $res['DeviceTags'] = [];
                foreach ($this->deviceTags as $key1 => $value1) {
                    $res['DeviceTags'][$key1] = $value1;
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
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = [];
                foreach ($map['DeviceTags'] as $key1 => $value1) {
                    $model->deviceTags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
