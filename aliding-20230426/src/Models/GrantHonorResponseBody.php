<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GrantHonorResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedUserIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $successUserIds;
    protected $_name = [
        'failedUserIds' => 'failedUserIds',
        'requestId' => 'requestId',
        'successUserIds' => 'successUserIds',
    ];

    public function validate()
    {
        if (\is_array($this->failedUserIds)) {
            Model::validateArray($this->failedUserIds);
        }
        if (\is_array($this->successUserIds)) {
            Model::validateArray($this->successUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedUserIds) {
            if (\is_array($this->failedUserIds)) {
                $res['failedUserIds'] = [];
                $n1 = 0;
                foreach ($this->failedUserIds as $item1) {
                    $res['failedUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->successUserIds) {
            if (\is_array($this->successUserIds)) {
                $res['successUserIds'] = [];
                $n1 = 0;
                foreach ($this->successUserIds as $item1) {
                    $res['successUserIds'][$n1++] = $item1;
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
        if (isset($map['failedUserIds'])) {
            if (!empty($map['failedUserIds'])) {
                $model->failedUserIds = [];
                $n1 = 0;
                foreach ($map['failedUserIds'] as $item1) {
                    $model->failedUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['successUserIds'])) {
            if (!empty($map['successUserIds'])) {
                $model->successUserIds = [];
                $n1 = 0;
                foreach ($map['successUserIds'] as $item1) {
                    $model->successUserIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
