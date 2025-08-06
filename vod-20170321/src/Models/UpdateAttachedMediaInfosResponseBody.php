<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UpdateAttachedMediaInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistMediaIds)) {
            Model::validateArray($this->nonExistMediaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistMediaIds) {
            if (\is_array($this->nonExistMediaIds)) {
                $res['NonExistMediaIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistMediaIds as $item1) {
                    $res['NonExistMediaIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = [];
                $n1 = 0;
                foreach ($map['NonExistMediaIds'] as $item1) {
                    $model->nonExistMediaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
