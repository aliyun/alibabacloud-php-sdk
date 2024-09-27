<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditProhibitedDevicesRequest\hvacDeviceConfigVOList;
use AlibabaCloud\Tea\Model;

class EditProhibitedDevicesRequest extends Model
{
    /**
     * @example ***
     *
     * @var string
     */
    public $factoryId;

    /**
     * @var hvacDeviceConfigVOList[]
     */
    public $hvacDeviceConfigVOList;

    /**
     * @example system1
     *
     * @var string
     */
    public $systemId;
    protected $_name = [
        'factoryId'              => 'factoryId',
        'hvacDeviceConfigVOList' => 'hvacDeviceConfigVOList',
        'systemId'               => 'systemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }
        if (null !== $this->hvacDeviceConfigVOList) {
            $res['hvacDeviceConfigVOList'] = [];
            if (null !== $this->hvacDeviceConfigVOList && \is_array($this->hvacDeviceConfigVOList)) {
                $n = 0;
                foreach ($this->hvacDeviceConfigVOList as $item) {
                    $res['hvacDeviceConfigVOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemId) {
            $res['systemId'] = $this->systemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditProhibitedDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }
        if (isset($map['hvacDeviceConfigVOList'])) {
            if (!empty($map['hvacDeviceConfigVOList'])) {
                $model->hvacDeviceConfigVOList = [];
                $n                             = 0;
                foreach ($map['hvacDeviceConfigVOList'] as $item) {
                    $model->hvacDeviceConfigVOList[$n++] = null !== $item ? hvacDeviceConfigVOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['systemId'])) {
            $model->systemId = $map['systemId'];
        }

        return $model;
    }
}
