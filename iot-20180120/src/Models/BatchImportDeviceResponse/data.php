<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data\invalidDeviceSecretList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data\invalidSnList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponse\data\repeatedDeviceNameList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
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
     * @var invalidDeviceSecretList
     */
    public $invalidDeviceSecretList;

    /**
     * @var invalidSnList
     */
    public $invalidSnList;

    /**
     * @var repeatedDeviceNameList
     */
    public $repeatedDeviceNameList;
    protected $_name = [
        'applyId'                 => 'ApplyId',
        'invalidDetailList'       => 'InvalidDetailList',
        'invalidDeviceNameList'   => 'InvalidDeviceNameList',
        'invalidDeviceSecretList' => 'InvalidDeviceSecretList',
        'invalidSnList'           => 'InvalidSnList',
        'repeatedDeviceNameList'  => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
        Model::validateRequired('applyId', $this->applyId, true);
        Model::validateRequired('invalidDetailList', $this->invalidDetailList, true);
        Model::validateRequired('invalidDeviceNameList', $this->invalidDeviceNameList, true);
        Model::validateRequired('invalidDeviceSecretList', $this->invalidDeviceSecretList, true);
        Model::validateRequired('invalidSnList', $this->invalidSnList, true);
        Model::validateRequired('repeatedDeviceNameList', $this->repeatedDeviceNameList, true);
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
        if (null !== $this->invalidDeviceSecretList) {
            $res['InvalidDeviceSecretList'] = null !== $this->invalidDeviceSecretList ? $this->invalidDeviceSecretList->toMap() : null;
        }
        if (null !== $this->invalidSnList) {
            $res['InvalidSnList'] = null !== $this->invalidSnList ? $this->invalidSnList->toMap() : null;
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
        if (isset($map['InvalidDeviceSecretList'])) {
            $model->invalidDeviceSecretList = invalidDeviceSecretList::fromMap($map['InvalidDeviceSecretList']);
        }
        if (isset($map['InvalidSnList'])) {
            $model->invalidSnList = invalidSnList::fromMap($map['InvalidSnList']);
        }
        if (isset($map['RepeatedDeviceNameList'])) {
            $model->repeatedDeviceNameList = repeatedDeviceNameList::fromMap($map['RepeatedDeviceNameList']);
        }

        return $model;
    }
}
