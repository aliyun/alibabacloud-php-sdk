<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\TransferDeviceInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class successList extends Model
{
    /**
     * @example e598798j****
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'message'    => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
