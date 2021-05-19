<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class GetCallsPerDayRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $dataIdStart;

    /**
     * @var string
     */
    public $dataIdEnd;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $hourId;

    /**
     * @var string
     */
    public $minuteId;

    /**
     * @var string
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $havePhoneNumbers;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'dataIdStart'      => 'DataIdStart',
        'dataIdEnd'        => 'DataIdEnd',
        'dataId'           => 'DataId',
        'hourId'           => 'HourId',
        'minuteId'         => 'MinuteId',
        'phoneNumbers'     => 'PhoneNumbers',
        'havePhoneNumbers' => 'HavePhoneNumbers',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dataIdStart) {
            $res['DataIdStart'] = $this->dataIdStart;
        }
        if (null !== $this->dataIdEnd) {
            $res['DataIdEnd'] = $this->dataIdEnd;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->hourId) {
            $res['HourId'] = $this->hourId;
        }
        if (null !== $this->minuteId) {
            $res['MinuteId'] = $this->minuteId;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->havePhoneNumbers) {
            $res['HavePhoneNumbers'] = $this->havePhoneNumbers;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCallsPerDayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DataIdStart'])) {
            $model->dataIdStart = $map['DataIdStart'];
        }
        if (isset($map['DataIdEnd'])) {
            $model->dataIdEnd = $map['DataIdEnd'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['HourId'])) {
            $model->hourId = $map['HourId'];
        }
        if (isset($map['MinuteId'])) {
            $model->minuteId = $map['MinuteId'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = $map['PhoneNumbers'];
        }
        if (isset($map['HavePhoneNumbers'])) {
            $model->havePhoneNumbers = $map['HavePhoneNumbers'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
