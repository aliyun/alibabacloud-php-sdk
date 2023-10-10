<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList;
use AlibabaCloud\Tea\Model;

class ListAuthorityResponseBody extends Model
{
    /**
     * @description The permissions.
     *
     * @var authorityList
     */
    public $authorityList;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 57609587-DFA2-41EC-****-*********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorityList' => 'AuthorityList',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityList) {
            $res['AuthorityList'] = null !== $this->authorityList ? $this->authorityList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthorityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityList'])) {
            $model->authorityList = authorityList::fromMap($map['AuthorityList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
