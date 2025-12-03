<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponseBody\commentList;

class GetWorkitemCommentListResponseBody extends Model
{
    /**
     * @var commentList[]
     */
    public $commentList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'commentList' => 'commentList',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        if (\is_array($this->commentList)) {
            Model::validateArray($this->commentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commentList) {
            if (\is_array($this->commentList)) {
                $res['commentList'] = [];
                $n1 = 0;
                foreach ($this->commentList as $item1) {
                    $res['commentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
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
        if (isset($map['commentList'])) {
            if (!empty($map['commentList'])) {
                $model->commentList = [];
                $n1 = 0;
                foreach ($map['commentList'] as $item1) {
                    $model->commentList[$n1] = commentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
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
