<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class BodyValue extends Model
{
    /**
     * @var bool
     */
    public $pauseAll;

    /**
     * @var bool
     */
    public $pauseIndex;

    /**
     * @var bool
     */
    public $pauseIndexBatch;

    /**
     * @var bool
     */
    public $pauseBiz;

    /**
     * @var bool
     */
    public $pauseRuntime;
    protected $_name = [
        'pauseAll' => 'pauseAll',
        'pauseIndex' => 'pauseIndex',
        'pauseIndexBatch' => 'pauseIndexBatch',
        'pauseBiz' => 'pauseBiz',
        'pauseRuntime' => 'pauseRuntime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pauseAll) {
            $res['pauseAll'] = $this->pauseAll;
        }

        if (null !== $this->pauseIndex) {
            $res['pauseIndex'] = $this->pauseIndex;
        }

        if (null !== $this->pauseIndexBatch) {
            $res['pauseIndexBatch'] = $this->pauseIndexBatch;
        }

        if (null !== $this->pauseBiz) {
            $res['pauseBiz'] = $this->pauseBiz;
        }

        if (null !== $this->pauseRuntime) {
            $res['pauseRuntime'] = $this->pauseRuntime;
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
        if (isset($map['pauseAll'])) {
            $model->pauseAll = $map['pauseAll'];
        }

        if (isset($map['pauseIndex'])) {
            $model->pauseIndex = $map['pauseIndex'];
        }

        if (isset($map['pauseIndexBatch'])) {
            $model->pauseIndexBatch = $map['pauseIndexBatch'];
        }

        if (isset($map['pauseBiz'])) {
            $model->pauseBiz = $map['pauseBiz'];
        }

        if (isset($map['pauseRuntime'])) {
            $model->pauseRuntime = $map['pauseRuntime'];
        }

        return $model;
    }
}
