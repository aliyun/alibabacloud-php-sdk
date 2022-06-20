<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDeviceNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidDeviceSecretList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\invalidSnList;
use AlibabaCloud\SDK\Iot\V20180120\Models\BatchImportDeviceResponseBody\data\repeatedDeviceNameList;
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
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
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
