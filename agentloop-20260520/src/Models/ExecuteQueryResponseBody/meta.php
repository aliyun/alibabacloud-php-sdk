<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\ExecuteQueryResponseBody\meta\truncation;

class meta extends Model
{
    /**
     * @var int
     */
    public $affectedRows;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $elapsedMillisecond;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var truncation
     */
    public $truncation;
    protected $_name = [
        'affectedRows' => 'affectedRows',
        'count' => 'count',
        'elapsedMillisecond' => 'elapsedMillisecond',
        'progress' => 'progress',
        'truncation' => 'truncation',
    ];

    public function validate()
    {
        if (null !== $this->truncation) {
            $this->truncation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedRows) {
            $res['affectedRows'] = $this->affectedRows;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->elapsedMillisecond) {
            $res['elapsedMillisecond'] = $this->elapsedMillisecond;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->truncation) {
            $res['truncation'] = null !== $this->truncation ? $this->truncation->toArray($noStream) : $this->truncation;
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
        if (isset($map['affectedRows'])) {
            $model->affectedRows = $map['affectedRows'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['elapsedMillisecond'])) {
            $model->elapsedMillisecond = $map['elapsedMillisecond'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['truncation'])) {
            $model->truncation = truncation::fromMap($map['truncation']);
        }

        return $model;
    }
}
