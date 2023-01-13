<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class DeleteDeviceTunnelRequest extends Model
{
    /**
     * @var string
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'tunnelId'      => 'TunnelId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('tunnelId', $this->tunnelId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDeviceTunnelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
