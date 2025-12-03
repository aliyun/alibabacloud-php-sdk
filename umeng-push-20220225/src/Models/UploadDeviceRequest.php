<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class UploadDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceTokens;
    protected $_name = [
        'deviceTokens' => 'DeviceTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceTokens) {
            $res['DeviceTokens'] = $this->deviceTokens;
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
        if (isset($map['DeviceTokens'])) {
            $model->deviceTokens = $map['DeviceTokens'];
        }

        return $model;
    }
}
