<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineResponseBody;

use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the template was last modified.
     *
     * @example 2022-07-12T16:17:54Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The name of the MPS queue.
     *
     * @example test-pipeline
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the MPS queue.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The priority of the MPS queue. Valid values: 1 to 10.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;

    /**
     * @description The type of the MPS queue.
     *
     * Valid values:
     *
     *   Standard: standard MPS queue.
     *   Boost: MPS queue with transcoding speed boosted.
     *   NarrowBandHDV2: MPS queue that supports Narrowband HD 2.0.
     *
     * @example Standard
     *
     * @var string
     */
    public $speed;

    /**
     * @description The state of the MPS queue.
     *
     * Valid values:
     *
     *   Active
     *   Paused
     *
     * @example Active
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
