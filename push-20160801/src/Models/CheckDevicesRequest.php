<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class CheckDevicesRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $deviceIds;
    protected $_name = [
        'appKey' => 'AppKey',
        'deviceIds' => 'DeviceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['DeviceIds'])) {
            $model->deviceIds = $map['DeviceIds'];
        }

        return $model;
    }
}
