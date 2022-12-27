<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponseBody\commentList;
use AlibabaCloud\Tea\Model;

class GetWorkitemCommentListResponseBody extends Model
{
    /**
     * @var commentList[]
     */
    public $commentList;

    /**
     * @example Openapi.RequestError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'commentList' => 'commentList',
        'errorCode'   => 'errorCode',
        'errorMsg'    => 'errorMsg',
        'requestId'   => 'requestId',
        'success'     => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentList) {
            $res['commentList'] = [];
            if (null !== $this->commentList && \is_array($this->commentList)) {
                $n = 0;
                foreach ($this->commentList as $item) {
                    $res['commentList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetWorkitemCommentListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commentList'])) {
            if (!empty($map['commentList'])) {
                $model->commentList = [];
                $n                  = 0;
                foreach ($map['commentList'] as $item) {
                    $model->commentList[$n++] = null !== $item ? commentList::fromMap($item) : $item;
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
