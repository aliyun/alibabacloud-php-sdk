<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentResponseBody\pipeline\stages;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @description 发布包创建时间戳
     *
     * @example 1724984066000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 创建人
     *
     * @example 137946317766XXXX
     *
     * @var string
     */
    public $creator;

    /**
     * @description 发布流程Id
     *
     * @example a7ef0634-20ec-4a7c-a214-54020f91XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @description 修改时间
     *
     * @example 1724984066000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example 56160
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 步骤详情
     *
     * @var stages[]
     */
    public $stages;

    /**
     * @description 发布流程状态
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator'    => 'Creator',
        'id'         => 'Id',
        'message'    => 'Message',
        'modifyTime' => 'ModifyTime',
        'projectId'  => 'ProjectId',
        'stages'     => 'Stages',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->stages) {
            $res['Stages'] = [];
            if (null !== $this->stages && \is_array($this->stages)) {
                $n = 0;
                foreach ($this->stages as $item) {
                    $res['Stages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n             = 0;
                foreach ($map['Stages'] as $item) {
                    $model->stages[$n++] = null !== $item ? stages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
