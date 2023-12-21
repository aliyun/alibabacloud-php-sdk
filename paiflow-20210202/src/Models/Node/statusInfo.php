<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\Node;

use AlibabaCloud\SDK\PAIFlow\V20210202\Models\Node\statusInfo\conditions;
use AlibabaCloud\Tea\Model;

class statusInfo extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @example 2021-10-15T10:40:54.000Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example 9/9
     *
     * @var string
     */
    public $progress;

    /**
     * @example 2021-10-15T10:39:58.000Z
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'conditions' => 'Conditions',
        'finishedAt' => 'FinishedAt',
        'progress'   => 'Progress',
        'startedAt'  => 'StartedAt',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
