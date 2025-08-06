<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class MoveAppResourceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedResourceIds;

    /**
     * @var string[]
     */
    public $nonExistResourceIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedResourceIds' => 'FailedResourceIds',
        'nonExistResourceIds' => 'NonExistResourceIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedResourceIds)) {
            Model::validateArray($this->failedResourceIds);
        }
        if (\is_array($this->nonExistResourceIds)) {
            Model::validateArray($this->nonExistResourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResourceIds) {
            if (\is_array($this->failedResourceIds)) {
                $res['FailedResourceIds'] = [];
                $n1 = 0;
                foreach ($this->failedResourceIds as $item1) {
                    $res['FailedResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistResourceIds) {
            if (\is_array($this->nonExistResourceIds)) {
                $res['NonExistResourceIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistResourceIds as $item1) {
                    $res['NonExistResourceIds'][$n1] = $item1;
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
        if (isset($map['FailedResourceIds'])) {
            if (!empty($map['FailedResourceIds'])) {
                $model->failedResourceIds = [];
                $n1 = 0;
                foreach ($map['FailedResourceIds'] as $item1) {
                    $model->failedResourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistResourceIds'])) {
            if (!empty($map['NonExistResourceIds'])) {
                $model->nonExistResourceIds = [];
                $n1 = 0;
                foreach ($map['NonExistResourceIds'] as $item1) {
                    $model->nonExistResourceIds[$n1] = $item1;
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
