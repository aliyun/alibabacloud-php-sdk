<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetDeviceOpLogResponseBody;

use AlibabaCloud\Tea\Model;

class operationLogs extends Model
{
    /**
     * @description 设备ID
     *
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description SNMP Privacy Protocol
     *
     * @example role
     *
     * @var string
     */
    public $keyword;

    /**
     * @example FW
     *
     * @var string
     */
    public $newValue;

    /**
     * @description 设备额外属性(JSON)
     *
     * @example ASW
     *
     * @var string
     */
    public $oldValue;

    /**
     * @description SNMP Privacy Passphrase
     *
     * @example UpdateDevice
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'deviceId'        => 'DeviceId',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'keyword'         => 'Keyword',
        'newValue'        => 'NewValue',
        'oldValue'        => 'OldValue',
        'operator'        => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->oldValue) {
            $res['OldValue'] = $this->oldValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OldValue'])) {
            $model->oldValue = $map['OldValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
