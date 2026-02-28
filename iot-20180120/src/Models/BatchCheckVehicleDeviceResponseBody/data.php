<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckVehicleDeviceResponseBody\data\invalidDetailList;

class data extends Model
{
    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;

    /**
     * @var string[]
     */
    public $invalidDeviceIdList;

    /**
     * @var string[]
     */
    public $invalidDeviceModelList;

    /**
     * @var string[]
     */
    public $invalidDeviceNameList;

    /**
     * @var string[]
     */
    public $invalidManufacturerList;

    /**
     * @var string[]
     */
    public $repeatedDeviceIdList;

    /**
     * @var string[]
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
        'invalidDeviceIdList' => 'InvalidDeviceIdList',
        'invalidDeviceModelList' => 'InvalidDeviceModelList',
        'invalidDeviceNameList' => 'InvalidDeviceNameList',
        'invalidManufacturerList' => 'InvalidManufacturerList',
        'repeatedDeviceIdList' => 'RepeatedDeviceIdList',
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDetailList)) {
            Model::validateArray($this->invalidDetailList);
        }
        if (\is_array($this->invalidDeviceIdList)) {
            Model::validateArray($this->invalidDeviceIdList);
        }
        if (\is_array($this->invalidDeviceModelList)) {
            Model::validateArray($this->invalidDeviceModelList);
        }
        if (\is_array($this->invalidDeviceNameList)) {
            Model::validateArray($this->invalidDeviceNameList);
        }
        if (\is_array($this->invalidManufacturerList)) {
            Model::validateArray($this->invalidManufacturerList);
        }
        if (\is_array($this->repeatedDeviceIdList)) {
            Model::validateArray($this->repeatedDeviceIdList);
        }
        if (\is_array($this->repeatedDeviceNameList)) {
            Model::validateArray($this->repeatedDeviceNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDetailList) {
            if (\is_array($this->invalidDetailList)) {
                $res['InvalidDetailList'] = [];
                $n1 = 0;
                foreach ($this->invalidDetailList as $item1) {
                    $res['InvalidDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidDeviceIdList) {
            if (\is_array($this->invalidDeviceIdList)) {
                $res['InvalidDeviceIdList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceIdList as $item1) {
                    $res['InvalidDeviceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidDeviceModelList) {
            if (\is_array($this->invalidDeviceModelList)) {
                $res['InvalidDeviceModelList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceModelList as $item1) {
                    $res['InvalidDeviceModelList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidDeviceNameList) {
            if (\is_array($this->invalidDeviceNameList)) {
                $res['InvalidDeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceNameList as $item1) {
                    $res['InvalidDeviceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidManufacturerList) {
            if (\is_array($this->invalidManufacturerList)) {
                $res['InvalidManufacturerList'] = [];
                $n1 = 0;
                foreach ($this->invalidManufacturerList as $item1) {
                    $res['InvalidManufacturerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repeatedDeviceIdList) {
            if (\is_array($this->repeatedDeviceIdList)) {
                $res['RepeatedDeviceIdList'] = [];
                $n1 = 0;
                foreach ($this->repeatedDeviceIdList as $item1) {
                    $res['RepeatedDeviceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repeatedDeviceNameList) {
            if (\is_array($this->repeatedDeviceNameList)) {
                $res['RepeatedDeviceNameList'] = [];
                $n1 = 0;
                foreach ($this->repeatedDeviceNameList as $item1) {
                    $res['RepeatedDeviceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InvalidDetailList'])) {
            if (!empty($map['InvalidDetailList'])) {
                $model->invalidDetailList = [];
                $n1 = 0;
                foreach ($map['InvalidDetailList'] as $item1) {
                    $model->invalidDetailList[$n1] = invalidDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidDeviceIdList'])) {
            if (!empty($map['InvalidDeviceIdList'])) {
                $model->invalidDeviceIdList = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceIdList'] as $item1) {
                    $model->invalidDeviceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidDeviceModelList'])) {
            if (!empty($map['InvalidDeviceModelList'])) {
                $model->invalidDeviceModelList = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceModelList'] as $item1) {
                    $model->invalidDeviceModelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceNameList'] as $item1) {
                    $model->invalidDeviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidManufacturerList'])) {
            if (!empty($map['InvalidManufacturerList'])) {
                $model->invalidManufacturerList = [];
                $n1 = 0;
                foreach ($map['InvalidManufacturerList'] as $item1) {
                    $model->invalidManufacturerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepeatedDeviceIdList'])) {
            if (!empty($map['RepeatedDeviceIdList'])) {
                $model->repeatedDeviceIdList = [];
                $n1 = 0;
                foreach ($map['RepeatedDeviceIdList'] as $item1) {
                    $model->repeatedDeviceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = [];
                $n1 = 0;
                foreach ($map['RepeatedDeviceNameList'] as $item1) {
                    $model->repeatedDeviceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
