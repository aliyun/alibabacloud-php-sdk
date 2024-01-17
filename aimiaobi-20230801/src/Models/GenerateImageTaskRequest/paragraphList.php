<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskRequest;

use AlibabaCloud\Tea\Model;

class paragraphList extends Model
{
    /**
     * @example 一直忧伤的猫
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $taskId;

    /**
     * @example SUCCESSED
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'content'    => 'Content',
        'id'         => 'Id',
        'taskId'     => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paragraphList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
