<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsResponseBody extends Model
{
    /**
     * @description 向前查询到的日志条数。
     *
     * @var int
     */
    public $backLines;

    /**
     * @description 向后查询到的日志条数。
     *
     * @var int
     */
    public $forwardLines;

    /**
     * @description 获取到的日志，按上下文顺序排列。当根据指定起始日志查询不到上下文日志时，此参数为空。
     *
     * @var mixed[][]
     */
    public $logs;

    /**
     * @description 查询的结果是否完整。
     * Incomplete：查询已经完成，返回结果为不完整结果，需要重复请求以获得完整结果。
     * @var string
     */
    public $progress;

    /**
     * @description 返回的总日志条数，包含请求参数中所指定的起始日志。
     *
     * @var int
     */
    public $totalLines;
    protected $_name = [
        'backLines'    => 'back_lines',
        'forwardLines' => 'forward_lines',
        'logs'         => 'logs',
        'progress'     => 'progress',
        'totalLines'   => 'total_lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backLines) {
            $res['back_lines'] = $this->backLines;
        }
        if (null !== $this->forwardLines) {
            $res['forward_lines'] = $this->forwardLines;
        }
        if (null !== $this->logs) {
            $res['logs'] = $this->logs;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->totalLines) {
            $res['total_lines'] = $this->totalLines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContextLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['back_lines'])) {
            $model->backLines = $map['back_lines'];
        }
        if (isset($map['forward_lines'])) {
            $model->forwardLines = $map['forward_lines'];
        }
        if (isset($map['logs'])) {
            if (!empty($map['logs'])) {
                $model->logs = $map['logs'];
            }
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['total_lines'])) {
            $model->totalLines = $map['total_lines'];
        }

        return $model;
    }
}
