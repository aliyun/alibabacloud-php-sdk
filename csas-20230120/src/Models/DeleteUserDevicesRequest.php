<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserDevicesRequest extends Model
{
    /**
     * @var string[]
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
     * @return DeleteUserDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTags'])) {
            if (!empty($map['DeviceTags'])) {
                $model->deviceTags = $map['DeviceTags'];
            }
        }

        return $model;
    }
}
