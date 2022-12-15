<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class UploadDeviceRequest extends Model
{
    /**
     * @example device_token_1\ndevice_token_2\ndevice_token_3\n...
     * alias1\nalias2\nalias3\n...
     * @var string
     */
    public $deviceTokens;
    protected $_name = [
        'deviceTokens' => 'DeviceTokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTokens) {
            $res['DeviceTokens'] = $this->deviceTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceTokens'])) {
            $model->deviceTokens = $map['DeviceTokens'];
        }

        return $model;
    }
}
