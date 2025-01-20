<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateAICoachTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'requestId' => 'requestId',
        'taskIds'   => 'taskIds',
    ];

    public function validate()
    {
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['taskIds'] = [];
                $n1             = 0;
                foreach ($this->taskIds as $item1) {
                    $res['taskIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = [];
                $n1             = 0;
                foreach ($map['taskIds'] as $item1) {
                    $model->taskIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
