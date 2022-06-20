<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckImportDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
        'invalidDeviceNameList'   => 'InvalidDeviceNameList',
        'invalidDeviceSecretList' => 'InvalidDeviceSecretList',
        'invalidSnList'           => 'InvalidSnList',
        'repeatedDeviceNameList'  => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = $this->invalidDeviceNameList;
        }
        if (null !== $this->invalidDeviceSecretList) {
            $res['InvalidDeviceSecretList'] = $this->invalidDeviceSecretList;
        }
        if (null !== $this->invalidSnList) {
            $res['InvalidSnList'] = $this->invalidSnList;
        }
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = $this->repeatedDeviceNameList;
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
        if (isset($map['InvalidDeviceNameList'])) {
            if (!empty($map['InvalidDeviceNameList'])) {
                $model->invalidDeviceNameList = $map['InvalidDeviceNameList'];
            }
        }
        if (isset($map['InvalidDeviceSecretList'])) {
            if (!empty($map['InvalidDeviceSecretList'])) {
                $model->invalidDeviceSecretList = $map['InvalidDeviceSecretList'];
            }
        }
        if (isset($map['InvalidSnList'])) {
            if (!empty($map['InvalidSnList'])) {
                $model->invalidSnList = $map['InvalidSnList'];
            }
        }
        if (isset($map['RepeatedDeviceNameList'])) {
            if (!empty($map['RepeatedDeviceNameList'])) {
                $model->repeatedDeviceNameList = $map['RepeatedDeviceNameList'];
            }
        }

        return $model;
    }
}
