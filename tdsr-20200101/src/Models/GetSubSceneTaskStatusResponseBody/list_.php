<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetSubSceneTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 任务失败错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 任务失败错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 任务ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 未开始  init 处理中   processing   失败     failure  完成     succeed  取消     canceled
     *
     * @var string
     */
    public $status;

    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $subSceneId;

    /**
     * @description 墙线预测: wall_line   切图: cut_image 重建: build  直角优化：right_angle_optimization 其他：other
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'errorCode'  => 'ErrorCode',
        'errorMsg'   => 'ErrorMsg',
        'id'         => 'Id',
        'sceneId'    => 'SceneId',
        'status'     => 'Status',
        'subSceneId' => 'SubSceneId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subSceneId) {
            $res['SubSceneId'] = $this->subSceneId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubSceneId'])) {
            $model->subSceneId = $map['SubSceneId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
