<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList\info;

class deviceList extends Model
{
    /**
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
        if (null !== $this->info) {
            $this->info->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['info'] = null !== $this->info ? $this->info->toArray($noStream) : $this->info;
        }

        if (null !== $this->parentDevice) {
            $res['parentDevice'] = $this->parentDevice;
        }

        if (null !== $this->secondTypeName) {
            $res['secondTypeName'] = $this->secondTypeName;
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
