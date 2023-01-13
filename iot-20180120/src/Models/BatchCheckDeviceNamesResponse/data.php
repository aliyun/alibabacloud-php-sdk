<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchCheckDeviceNamesResponse\data\invalidDeviceNicknameList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $applyId;

    /**
     * @var invalidDeviceNameList
     */
    public $invalidDeviceNameList;

    /**
     * @var invalidDeviceNicknameList
     */
    public $invalidDeviceNicknameList;
    protected $_name = [
        'applyId'                   => 'ApplyId',
        'invalidDeviceNameList'     => 'InvalidDeviceNameList',
        'invalidDeviceNicknameList' => 'InvalidDeviceNicknameList',
    ];

    public function validate()
    {
        Model::validateRequired('applyId', $this->applyId, true);
        Model::validateRequired('invalidDeviceNameList', $this->invalidDeviceNameList, true);
        Model::validateRequired('invalidDeviceNicknameList', $this->invalidDeviceNicknameList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = null !== $this->invalidDeviceNameList ? $this->invalidDeviceNameList->toMap() : null;
        }
        if (null !== $this->invalidDeviceNicknameList) {
            $res['InvalidDeviceNicknameList'] = null !== $this->invalidDeviceNicknameList ? $this->invalidDeviceNicknameList->toMap() : null;
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
        if (isset($map['InvalidDeviceNameList'])) {
            $model->invalidDeviceNameList = invalidDeviceNameList::fromMap($map['InvalidDeviceNameList']);
        }
        if (isset($map['InvalidDeviceNicknameList'])) {
            $model->invalidDeviceNicknameList = invalidDeviceNicknameList::fromMap($map['InvalidDeviceNicknameList']);
        }

        return $model;
    }
}
