<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteCameraShootingCommandResponseBody;

use AlibabaCloud\Tea\Model;

class shootingRecord extends Model
{
    /**
     * @description 主键ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 拍摄类型，0-图片，1-视频
     *
     * @var int
     */
    public $shootingType;

    /**
     * @description 拍摄数量
     *
     * @var int
     */
    public $number;

    /**
     * @description 拍照间隔/视频时长，单位为s
     *
     * @var int
     */
    public $time;

    /**
     * @description 记录时间
     *
     * @var int
     */
    public $recordTime;

    /**
     * @description 状态：0-未完成，1-已完成
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'id'           => 'Id',
        'shootingType' => 'ShootingType',
        'number'       => 'Number',
        'time'         => 'Time',
        'recordTime'   => 'RecordTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->shootingType) {
            $res['ShootingType'] = $this->shootingType;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->recordTime) {
            $res['RecordTime'] = $this->recordTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shootingRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ShootingType'])) {
            $model->shootingType = $map['ShootingType'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['RecordTime'])) {
            $model->recordTime = $map['RecordTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
