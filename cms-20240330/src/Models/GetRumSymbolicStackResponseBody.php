<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetRumSymbolicStackResponseBody extends Model
{
    /**
     * @var int
     */
    public $column;

    /**
     * @var int
     */
    public $line;

    /**
     * @var string[]
     */
    public $lines;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string[]
     */
    public $traceInfo;

    /**
     * @var int
     */
    public $traceMarkLine;
    protected $_name = [
        'column' => 'column',
        'line' => 'line',
        'lines' => 'lines',
        'name' => 'name',
        'requestId' => 'requestId',
        'source' => 'source',
        'threadId' => 'threadId',
        'traceInfo' => 'traceInfo',
        'traceMarkLine' => 'traceMarkLine',
    ];

    public function validate()
    {
        if (\is_array($this->lines)) {
            Model::validateArray($this->lines);
        }
        if (\is_array($this->traceInfo)) {
            Model::validateArray($this->traceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->column) {
            $res['column'] = $this->column;
        }

        if (null !== $this->line) {
            $res['line'] = $this->line;
        }

        if (null !== $this->lines) {
            if (\is_array($this->lines)) {
                $res['lines'] = [];
                $n1 = 0;
                foreach ($this->lines as $item1) {
                    $res['lines'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->traceInfo) {
            if (\is_array($this->traceInfo)) {
                $res['traceInfo'] = [];
                $n1 = 0;
                foreach ($this->traceInfo as $item1) {
                    $res['traceInfo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->traceMarkLine) {
            $res['traceMarkLine'] = $this->traceMarkLine;
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
        if (isset($map['column'])) {
            $model->column = $map['column'];
        }

        if (isset($map['line'])) {
            $model->line = $map['line'];
        }

        if (isset($map['lines'])) {
            if (!empty($map['lines'])) {
                $model->lines = [];
                $n1 = 0;
                foreach ($map['lines'] as $item1) {
                    $model->lines[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['traceInfo'])) {
            if (!empty($map['traceInfo'])) {
                $model->traceInfo = [];
                $n1 = 0;
                foreach ($map['traceInfo'] as $item1) {
                    $model->traceInfo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['traceMarkLine'])) {
            $model->traceMarkLine = $map['traceMarkLine'];
        }

        return $model;
    }
}
