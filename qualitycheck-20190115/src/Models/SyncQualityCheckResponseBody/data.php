<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\SyncQualityCheckResponseBody\data\rules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1584535485856
     *
     * @var int
     */
    public $beginTime;

    /**
     * @var rules[]
     */
    public $rules;

    /**
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @example 66E1ACB866E1ACB8
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 20200876-66E1ACB8
     *
     * @var string
     */
    public $tid;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'rules'     => 'Rules',
        'score'     => 'Score',
        'taskId'    => 'TaskId',
        'tid'       => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
