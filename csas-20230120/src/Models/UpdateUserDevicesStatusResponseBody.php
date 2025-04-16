<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateUserDevicesStatusResponseBody\devices;

class UpdateUserDevicesStatusResponseBody extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'devices' => 'Devices',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['Devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['Devices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['Devices'] as $item1) {
                    $model->devices[$n1++] = devices::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
