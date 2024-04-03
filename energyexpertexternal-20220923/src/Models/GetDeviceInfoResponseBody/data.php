<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceInfoResponseBody\data\recordList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the device.
     *
     * @example pn_69873
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description The name of the device.
     *
     * @example Main transformer 4#
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The level 1 meter type.
     *
     * @example Electric meter
     *
     * @var string
     */
    public $firstTypeName;

    /**
     * @description The device parameters.
     *
     * @var recordList[]
     */
    public $recordList;

    /**
     * @description The level 2 meter type.
     *
     * @example Gateway meter
     *
     * @var string
     */
    public $secondTypeName;
    protected $_name = [
        'deviceId'       => 'deviceId',
        'deviceName'     => 'deviceName',
        'firstTypeName'  => 'firstTypeName',
        'recordList'     => 'recordList',
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
        if (null !== $this->recordList) {
            $res['recordList'] = [];
            if (null !== $this->recordList && \is_array($this->recordList)) {
                $n = 0;
                foreach ($this->recordList as $item) {
                    $res['recordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->secondTypeName) {
            $res['secondTypeName'] = $this->secondTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['recordList'])) {
            if (!empty($map['recordList'])) {
                $model->recordList = [];
                $n                 = 0;
                foreach ($map['recordList'] as $item) {
                    $model->recordList[$n++] = null !== $item ? recordList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['secondTypeName'])) {
            $model->secondTypeName = $map['secondTypeName'];
        }

        return $model;
    }
}
