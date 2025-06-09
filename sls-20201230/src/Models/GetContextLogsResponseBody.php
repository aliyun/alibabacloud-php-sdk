<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

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
        'backLines' => 'back_lines',
        'forwardLines' => 'forward_lines',
        'logs' => 'logs',
        'progress' => 'progress',
        'totalLines' => 'total_lines',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backLines) {
            $res['back_lines'] = $this->backLines;
        }

        if (null !== $this->forwardLines) {
            $res['forward_lines'] = $this->forwardLines;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    if (\is_array($item1)) {
                        $res['logs'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['logs'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->totalLines) {
            $res['total_lines'] = $this->totalLines;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->logs = [];
                $n1 = 0;
                foreach ($map['logs'] as $item1) {
                    if (!empty($item1)) {
                        $model->logs[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->logs[$n1++][$key2] = $value2;
                        }
                    }
                }
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
