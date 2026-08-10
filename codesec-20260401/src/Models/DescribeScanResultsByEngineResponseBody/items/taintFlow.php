<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items;

use AlibabaCloud\Dara\Model;

class taintFlow extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $file;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var int
     */
    public $line;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $step;
    protected $_name = [
        'code' => 'code',
        'file' => 'file',
        'kind' => 'kind',
        'line' => 'line',
        'note' => 'note',
        'step' => 'step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->file) {
            $res['file'] = $this->file;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->line) {
            $res['line'] = $this->line;
        }

        if (null !== $this->note) {
            $res['note'] = $this->note;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['file'])) {
            $model->file = $map['file'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['line'])) {
            $model->line = $map['line'];
        }

        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}
