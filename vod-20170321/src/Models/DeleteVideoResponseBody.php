<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteVideoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenVideoIds;

    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenVideoIds' => 'ForbiddenVideoIds',
        'nonExistVideoIds' => 'NonExistVideoIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenVideoIds)) {
            Model::validateArray($this->forbiddenVideoIds);
        }
        if (\is_array($this->nonExistVideoIds)) {
            Model::validateArray($this->nonExistVideoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenVideoIds) {
            if (\is_array($this->forbiddenVideoIds)) {
                $res['ForbiddenVideoIds'] = [];
                $n1 = 0;
                foreach ($this->forbiddenVideoIds as $item1) {
                    $res['ForbiddenVideoIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nonExistVideoIds) {
            if (\is_array($this->nonExistVideoIds)) {
                $res['NonExistVideoIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistVideoIds as $item1) {
                    $res['NonExistVideoIds'][$n1++] = $item1;
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
        if (isset($map['ForbiddenVideoIds'])) {
            if (!empty($map['ForbiddenVideoIds'])) {
                $model->forbiddenVideoIds = [];
                $n1 = 0;
                foreach ($map['ForbiddenVideoIds'] as $item1) {
                    $model->forbiddenVideoIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = [];
                $n1 = 0;
                foreach ($map['NonExistVideoIds'] as $item1) {
                    $model->nonExistVideoIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
