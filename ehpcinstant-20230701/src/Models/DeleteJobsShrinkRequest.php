<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class DeleteJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $executorIdsShrink;

    /**
     * @var string
     */
    public $jobScheduler;

    /**
     * @var string
     */
    public $jobSpecShrink;
    protected $_name = [
        'executorIdsShrink' => 'ExecutorIds',
        'jobScheduler' => 'JobScheduler',
        'jobSpecShrink' => 'JobSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorIdsShrink) {
            $res['ExecutorIds'] = $this->executorIdsShrink;
        }

        if (null !== $this->jobScheduler) {
            $res['JobScheduler'] = $this->jobScheduler;
        }

        if (null !== $this->jobSpecShrink) {
            $res['JobSpec'] = $this->jobSpecShrink;
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
        if (isset($map['ExecutorIds'])) {
            $model->executorIdsShrink = $map['ExecutorIds'];
        }

        if (isset($map['JobScheduler'])) {
            $model->jobScheduler = $map['JobScheduler'];
        }

        if (isset($map['JobSpec'])) {
            $model->jobSpecShrink = $map['JobSpec'];
        }

        return $model;
    }
}
