<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteMezzaninesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistReferenceIds;

    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $unRemoveableVideoIds;
    protected $_name = [
        'nonExistReferenceIds' => 'NonExistReferenceIds',
        'nonExistVideoIds' => 'NonExistVideoIds',
        'requestId' => 'RequestId',
        'unRemoveableVideoIds' => 'UnRemoveableVideoIds',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistReferenceIds)) {
            Model::validateArray($this->nonExistReferenceIds);
        }
        if (\is_array($this->nonExistVideoIds)) {
            Model::validateArray($this->nonExistVideoIds);
        }
        if (\is_array($this->unRemoveableVideoIds)) {
            Model::validateArray($this->unRemoveableVideoIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistReferenceIds) {
            if (\is_array($this->nonExistReferenceIds)) {
                $res['NonExistReferenceIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistReferenceIds as $item1) {
                    $res['NonExistReferenceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistVideoIds) {
            if (\is_array($this->nonExistVideoIds)) {
                $res['NonExistVideoIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistVideoIds as $item1) {
                    $res['NonExistVideoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->unRemoveableVideoIds) {
            if (\is_array($this->unRemoveableVideoIds)) {
                $res['UnRemoveableVideoIds'] = [];
                $n1 = 0;
                foreach ($this->unRemoveableVideoIds as $item1) {
                    $res['UnRemoveableVideoIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['NonExistReferenceIds'])) {
            if (!empty($map['NonExistReferenceIds'])) {
                $model->nonExistReferenceIds = [];
                $n1 = 0;
                foreach ($map['NonExistReferenceIds'] as $item1) {
                    $model->nonExistReferenceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = [];
                $n1 = 0;
                foreach ($map['NonExistVideoIds'] as $item1) {
                    $model->nonExistVideoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UnRemoveableVideoIds'])) {
            if (!empty($map['UnRemoveableVideoIds'])) {
                $model->unRemoveableVideoIds = [];
                $n1 = 0;
                foreach ($map['UnRemoveableVideoIds'] as $item1) {
                    $model->unRemoveableVideoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
