<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\StartCheckQualityResponseBody\returnValue\results;
use AlibabaCloud\Tea\Model;

class returnValue extends Model
{
    /**
     * @var results[]
     */
    public $results;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'results' => 'Results',
        'success' => 'Success',
        'taskId'  => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
