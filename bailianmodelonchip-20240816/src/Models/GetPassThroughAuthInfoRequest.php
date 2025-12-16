<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class GetPassThroughAuthInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $deviceName;
    protected $_name = [
        'appId' => 'appId',
        'deviceName' => 'deviceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        return $model;
    }
}
