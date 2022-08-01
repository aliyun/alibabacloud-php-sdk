<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsResponseBody extends Model
{
    /**
     * @var int
     */
    public $backLines;

    /**
     * @var int
     */
    public $forwardLines;

    /**
     * @var mixed[][]
     */
    public $logs;

    /**
     * @var string
     */
    public $progress;

    /**
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
