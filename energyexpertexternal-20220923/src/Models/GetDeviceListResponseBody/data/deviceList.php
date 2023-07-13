<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList\info;
use AlibabaCloud\Tea\Model;

class deviceList extends Model
{
    /**
     * @example pn_69873
     *
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $firstTypeName;

    /**
     * @var info
     */
    public $info;

    /**
     * @example pn_6987
     *
     * @var string
     */
    public $parentDevice;

    /**
     * @var string
     */
    public $secondTypeName;
    protected $_name = [
        'deviceId'       => 'deviceId',
        'deviceName'     => 'deviceName',
        'firstTypeName'  => 'firstTypeName',
        'info'           => 'info',
        'parentDevice'   => 'parentDevice',
        'secondTypeName' => 'secondTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }
        if (null !== $this->firstTypeName) {
            $res['firstTypeName'] = $this->firstTypeName;
        }
        if (null !== $this->info) {
            $res['info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->parentDevice) {
            $res['parentDevice'] = $this->parentDevice;
        }
        if (null !== $this->secondTypeName) {
            $res['secondTypeName'] = $this->secondTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }
        if (isset($map['firstTypeName'])) {
            $model->firstTypeName = $map['firstTypeName'];
        }
        if (isset($map['info'])) {
            $model->info = info::fromMap($map['info']);
        }
        if (isset($map['parentDevice'])) {
            $model->parentDevice = $map['parentDevice'];
        }
        if (isset($map['secondTypeName'])) {
            $model->secondTypeName = $map['secondTypeName'];
        }

        return $model;
    }
}
