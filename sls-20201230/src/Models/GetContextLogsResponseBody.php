<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetContextLogsResponseBody extends Model
{
    /**
     * @description The number of logs that are generated before the generation time of the start log.
     *
     * @example 100
     *
     * @var int
     */
    public $backLines;

    /**
     * @description The number of logs that are generated after the generation time of the start log.
     *
     * @example 100
     *
     * @var int
     */
    public $forwardLines;

    /**
     * @description The logs that are returned.
     *
     * @var mixed[][]
     */
    public $logs;

    /**
     * @description Indicates whether the query and analysis results are complete. Valid values:
     *
     *   Complete: The query is successful, and the complete query and analysis results are returned.
     *   Incomplete: The query is successful, but the query and analysis results are incomplete. To obtain the complete results, you must repeat the request.
     *
     * @example Complete
     *
     * @var string
     */
    public $progress;

    /**
     * @description The total number of logs that are returned. The logs include the start log that is specified in the request.
     *
     * @example 201
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
