<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class BodyValue extends Model
{
    /**
     * @description Specifies whether to suspend all pushes.
     *
     * @example true
     *
     * @var bool
     */
    public $pauseAll;

    /**
     * @description Specifies whether to suspend the push for the new full index version.
     *
     * @example true
     *
     * @var bool
     */
    public $pauseIndex;

    /**
     * @description Specifies whether to suspend the push for the incremental indexes.
     *
     * @example true
     *
     * @var bool
     */
    public $pauseIndexBatch;

    /**
     * @description Specifies whether to suspend the push for the configuration.
     *
     * @example true
     *
     * @var bool
     */
    public $pauseBiz;

    /**
     * @description Specifies whether to suspend the push for the real-time incremental indexes.
     *
     * @example true
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BodyValue
     */
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
