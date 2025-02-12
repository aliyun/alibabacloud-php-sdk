<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\EditUnfavorableAreaDevicesRequest\hvacDeviceConfigVOList;

class EditUnfavorableAreaDevicesRequest extends Model
{
    /**
     * @var string
     */
    public $factoryId;
    /**
     * @var hvacDeviceConfigVOList[]
     */
    public $hvacDeviceConfigVOList;
    /**
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
        if (\is_array($this->hvacDeviceConfigVOList)) {
            Model::validateArray($this->hvacDeviceConfigVOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->factoryId) {
            $res['factoryId'] = $this->factoryId;
        }

        if (null !== $this->hvacDeviceConfigVOList) {
            if (\is_array($this->hvacDeviceConfigVOList)) {
                $res['hvacDeviceConfigVOList'] = [];
                $n1                            = 0;
                foreach ($this->hvacDeviceConfigVOList as $item1) {
                    $res['hvacDeviceConfigVOList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->systemId) {
            $res['systemId'] = $this->systemId;
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
        if (isset($map['factoryId'])) {
            $model->factoryId = $map['factoryId'];
        }

        if (isset($map['hvacDeviceConfigVOList'])) {
            if (!empty($map['hvacDeviceConfigVOList'])) {
                $model->hvacDeviceConfigVOList = [];
                $n1                            = 0;
                foreach ($map['hvacDeviceConfigVOList'] as $item1) {
                    $model->hvacDeviceConfigVOList[$n1++] = hvacDeviceConfigVOList::fromMap($item1);
                }
            }
        }

        if (isset($map['systemId'])) {
            $model->systemId = $map['systemId'];
        }

        return $model;
    }
}
