<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineResponseBody;

use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @description 模板创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 模板修改时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 管道名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 管道Id
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description 管道优先级
     *
     * @var int
     */
    public $priority;

    /**
     * @description 管道类型
     *
     * @var string
     */
    public $speed;

    /**
     * @description 管道状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'pipelineId'   => 'PipelineId',
        'priority'     => 'Priority',
        'speed'        => 'Speed',
        'status'       => 'Status',
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
