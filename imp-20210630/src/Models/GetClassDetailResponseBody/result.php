<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetClassDetailResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 课堂唯一标识，由调用CreateClass返回。
     *
     * @var string
     */
    public $classId;

    /**
     * @description 课堂标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 创建人ID。
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description 创建人昵称。
     *
     * @var string
     */
    public $createNickname;

    /**
     * @description 课堂状态，0:未开始 1:上课中 2:已下课。
     *
     * @var int
     */
    public $status;

    /**
     * @description 开始上课时间戳，毫秒。
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 下课时间戳，毫秒。
     *
     * @var int
     */
    public $endTime;
    protected $_name = [
        'classId'        => 'ClassId',
        'title'          => 'Title',
        'createUserId'   => 'CreateUserId',
        'createNickname' => 'CreateNickname',
        'status'         => 'Status',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createNickname) {
            $res['CreateNickname'] = $this->createNickname;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateNickname'])) {
            $model->createNickname = $map['CreateNickname'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
