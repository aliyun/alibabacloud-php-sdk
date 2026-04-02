<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ExecuteQueryResponseBody;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'affectedRows' => 'affectedRows',
        'count' => 'count',
        'elapsedMillisecond' => 'elapsedMillisecond',
        'progress' => 'progress',
    ];

    public function validate()
    {
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

        return $model;
    }
}
