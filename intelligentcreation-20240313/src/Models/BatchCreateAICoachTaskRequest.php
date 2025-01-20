<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateAICoachTaskRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scriptRecordId;
    /**
     * @var string[]
     */
    public $studentIds;
    protected $_name = [
        'requestId'      => 'requestId',
        'scriptRecordId' => 'scriptRecordId',
        'studentIds'     => 'studentIds',
    ];

    public function validate()
    {
        if (\is_array($this->studentIds)) {
            Model::validateArray($this->studentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }

        if (null !== $this->studentIds) {
            if (\is_array($this->studentIds)) {
                $res['studentIds'] = [];
                $n1                = 0;
                foreach ($this->studentIds as $item1) {
                    $res['studentIds'][$n1++] = $item1;
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

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        if (isset($map['studentIds'])) {
            if (!empty($map['studentIds'])) {
                $model->studentIds = [];
                $n1                = 0;
                foreach ($map['studentIds'] as $item1) {
                    $model->studentIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
