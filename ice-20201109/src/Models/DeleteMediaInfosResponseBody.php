<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteMediaInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenList;
    /**
     * @var string[]
     */
    public $ignoredList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenList' => 'ForbiddenList',
        'ignoredList'   => 'IgnoredList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenList)) {
            Model::validateArray($this->forbiddenList);
        }
        if (\is_array($this->ignoredList)) {
            Model::validateArray($this->ignoredList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenList) {
            if (\is_array($this->forbiddenList)) {
                $res['ForbiddenList'] = [];
                $n1                   = 0;
                foreach ($this->forbiddenList as $item1) {
                    $res['ForbiddenList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ignoredList) {
            if (\is_array($this->ignoredList)) {
                $res['IgnoredList'] = [];
                $n1                 = 0;
                foreach ($this->ignoredList as $item1) {
                    $res['IgnoredList'][$n1++] = $item1;
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
        if (isset($map['ForbiddenList'])) {
            if (!empty($map['ForbiddenList'])) {
                $model->forbiddenList = [];
                $n1                   = 0;
                foreach ($map['ForbiddenList'] as $item1) {
                    $model->forbiddenList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IgnoredList'])) {
            if (!empty($map['IgnoredList'])) {
                $model->ignoredList = [];
                $n1                 = 0;
                foreach ($map['IgnoredList'] as $item1) {
                    $model->ignoredList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
