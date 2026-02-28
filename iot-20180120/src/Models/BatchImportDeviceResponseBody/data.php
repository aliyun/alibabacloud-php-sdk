<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDetailList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDeviceSecretList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidSnList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\repeatedDeviceNameList;

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
        'applyId' => 'ApplyId',
        'invalidDetailList' => 'InvalidDetailList',
        'invalidDeviceNameList' => 'InvalidDeviceNameList',
        'invalidDeviceSecretList' => 'InvalidDeviceSecretList',
        'invalidSnList' => 'InvalidSnList',
        'repeatedDeviceNameList' => 'RepeatedDeviceNameList',
    ];

    public function validate()
    {
        if (null !== $this->invalidDetailList) {
            $this->invalidDetailList->validate();
        }
        if (null !== $this->invalidDeviceNameList) {
            $this->invalidDeviceNameList->validate();
        }
        if (null !== $this->invalidDeviceSecretList) {
            $this->invalidDeviceSecretList->validate();
        }
        if (null !== $this->invalidSnList) {
            $this->invalidSnList->validate();
        }
        if (null !== $this->repeatedDeviceNameList) {
            $this->repeatedDeviceNameList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }

        if (null !== $this->invalidDetailList) {
            $res['InvalidDetailList'] = null !== $this->invalidDetailList ? $this->invalidDetailList->toArray($noStream) : $this->invalidDetailList;
        }

        if (null !== $this->invalidDeviceNameList) {
            $res['InvalidDeviceNameList'] = null !== $this->invalidDeviceNameList ? $this->invalidDeviceNameList->toArray($noStream) : $this->invalidDeviceNameList;
        }

        if (null !== $this->invalidDeviceSecretList) {
            $res['InvalidDeviceSecretList'] = null !== $this->invalidDeviceSecretList ? $this->invalidDeviceSecretList->toArray($noStream) : $this->invalidDeviceSecretList;
        }

        if (null !== $this->invalidSnList) {
            $res['InvalidSnList'] = null !== $this->invalidSnList ? $this->invalidSnList->toArray($noStream) : $this->invalidSnList;
        }

        if (null !== $this->repeatedDeviceNameList) {
            $res['RepeatedDeviceNameList'] = null !== $this->repeatedDeviceNameList ? $this->repeatedDeviceNameList->toArray($noStream) : $this->repeatedDeviceNameList;
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
