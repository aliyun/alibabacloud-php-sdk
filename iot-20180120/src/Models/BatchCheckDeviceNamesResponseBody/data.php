<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data\invalidDeviceNicknameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponseBody\data\repeatedDeviceNameList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1295006
     *
     * @var int
     */
    public $applyId;

    /**
     * @var invalidDetailList
     */
    public $invalidDetailList;

    /**
     * @var invalidDeviceNameList
     */
    public $invalidDeviceNameList;

    /**
     * @var invalidDeviceNicknameList
     */
    public $invalidDeviceNicknameList;

    /**
     * @var repeatedDeviceNameList
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'applyId'                   => 'ApplyId',
        'invalidDetailList'         => 'InvalidDetailList',
        'invalidDeviceNameList'     => 'InvalidDeviceNameList',
        'invalidDeviceNicknameList' => 'InvalidDeviceNicknameList',
        'repeatedDeviceNameList'    => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toMap() : null;
        }
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = null !== $this->invalidDeviceNameList ? $this->invalidDeviceNameList->toMap() : null;
        }
        if (null !== $this->invalidDeviceNicknameList) {
            $res['InvalidDeviceNicknameList'] = null !== $this->invalidDeviceNicknameList ? $this->invalidDeviceNicknameList->toMap() : null;
        }
        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = null !== $this->repeatedDeviceNameList ? $this->repeatedDeviceNameList->toMap() : null;
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
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['InvalidDetailList'])) {
            $model->invalidDetailList = invalidDetailList::fromMap($map['InvalidDetailList']);
        }
        if (isset($map['InvalidDeviceNameList'])) {
            $model->invalidDeviceNameList = invalidDeviceNameList::fromMap($map['InvalidDeviceNameList']);
        }
        if (isset($map['InvalidDeviceNicknameList'])) {
            $model->invalidDeviceNicknameList = invalidDeviceNicknameList::fromMap($map['InvalidDeviceNicknameList']);
        }
        if (isset($map['RepeatedDeviceNameList'])) {
            $model->repeatedDeviceNameList = repeatedDeviceNameList::fromMap($map['RepeatedDeviceNameList']);
        }

        return $model;
    }
}
