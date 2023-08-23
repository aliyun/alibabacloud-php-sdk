<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceTagResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {       "antest1": "antest1",       "antest": "a"     }
     *
     * @var mixed[]
     */
    public $deviceTags;
    protected $_name = [
        'deviceTags' => 'DeviceTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTags) {
            $res['DeviceTags'] = $this->deviceTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTags'])) {
            $model->deviceTags = $map['DeviceTags'];
        }

        return $model;
    }
}
