<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceResponseBody\data\invalidDetailList;

class data extends Model
{
    /**
     * @var invalidDetailList[]
     */
    public $invalidDetailList;

    /**
     * @var string[]
     */
    public $invalidDeviceNameList;

    /**
     * @var string[]
     */
    public $invalidDeviceSecretList;

    /**
     * @var string[]
     */
    public $invalidSnList;

    /**
     * @var string[]
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'invalidDetailList' => 'InvalidDetailList',
        'invalidDeviceNameList' => 'InvalidDeviceNameList',
        'invalidDeviceSecretList' => 'InvalidDeviceSecretList',
        'invalidSnList' => 'InvalidSnList',
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
        if (\is_array($this->invalidDetailList)) {
            Model::validateArray($this->invalidDetailList);
        }
        if (\is_array($this->invalidDeviceNameList)) {
            Model::validateArray($this->invalidDeviceNameList);
        }
        if (\is_array($this->invalidDeviceSecretList)) {
            Model::validateArray($this->invalidDeviceSecretList);
        }
        if (\is_array($this->invalidSnList)) {
            Model::validateArray($this->invalidSnList);
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

        if (null !== $this->invalidDeviceSecretList) {
            if (\is_array($this->invalidDeviceSecretList)) {
                $res['InvalidDeviceSecretList'] = [];
                $n1 = 0;
                foreach ($this->invalidDeviceSecretList as $item1) {
                    $res['InvalidDeviceSecretList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->invalidSnList) {
            if (\is_array($this->invalidSnList)) {
                $res['InvalidSnList'] = [];
                $n1 = 0;
                foreach ($this->invalidSnList as $item1) {
                    $res['InvalidSnList'][$n1] = $item1;
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

        if (isset($map['InvalidDeviceSecretList'])) {
            if (!empty($map['InvalidDeviceSecretList'])) {
                $model->invalidDeviceSecretList = [];
                $n1 = 0;
                foreach ($map['InvalidDeviceSecretList'] as $item1) {
                    $model->invalidDeviceSecretList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InvalidSnList'])) {
            if (!empty($map['InvalidSnList'])) {
                $model->invalidSnList = [];
                $n1 = 0;
                foreach ($map['InvalidSnList'] as $item1) {
                    $model->invalidSnList[$n1] = $item1;
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
