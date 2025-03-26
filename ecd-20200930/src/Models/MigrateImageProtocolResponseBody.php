<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class MigrateImageProtocolResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedIds' => 'FailedIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedIds)) {
            Model::validateArray($this->failedIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedIds) {
            if (\is_array($this->failedIds)) {
                $res['FailedIds'] = [];
                $n1 = 0;
                foreach ($this->failedIds as $item1) {
                    $res['FailedIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedIds'])) {
            if (!empty($map['FailedIds'])) {
                $model->failedIds = [];
                $n1 = 0;
                foreach ($map['FailedIds'] as $item1) {
                    $model->failedIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
