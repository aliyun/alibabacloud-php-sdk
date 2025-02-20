<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemRelationsResponseBody\relationList;

class GetWorkitemRelationsResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var relationList[]
     */
    public $relationList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMsg'     => 'errorMsg',
        'relationList' => 'relationList',
        'requestId'    => 'requestId',
        'success'      => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['relationList'] = [];
                $n1                  = 0;
                foreach ($this->relationList as $item1) {
                    $res['relationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['relationList'])) {
            if (!empty($map['relationList'])) {
                $model->relationList = [];
                $n1                  = 0;
                foreach ($map['relationList'] as $item1) {
                    $model->relationList[$n1++] = relationList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
