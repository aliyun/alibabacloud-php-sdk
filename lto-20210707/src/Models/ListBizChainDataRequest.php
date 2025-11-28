<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class ListBizChainDataRequest extends Model
{
    /**
     * @var string
     */
    public $bizChainId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ioTDataDID;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'bizChainId' => 'BizChainId',
        'endTime' => 'EndTime',
        'ioTDataDID' => 'IoTDataDID',
        'memberId' => 'MemberId',
        'num' => 'Num',
        'regionId' => 'RegionId',
        'size' => 'Size',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->ioTDataDID) {
            $res['IoTDataDID'] = $this->ioTDataDID;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IoTDataDID'])) {
            $model->ioTDataDID = $map['IoTDataDID'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
