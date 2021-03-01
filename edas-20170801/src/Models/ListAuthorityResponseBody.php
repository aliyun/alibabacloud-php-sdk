<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList;
use AlibabaCloud\Tea\Model;

class ListAuthorityResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var authorityList
     */
    public $authorityList;
    protected $_name = [
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'code'          => 'Code',
        'authorityList' => 'AuthorityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->authorityList) {
            $res['AuthorityList'] = null !== $this->authorityList ? $this->authorityList->toMap() : null;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['AuthorityList'])) {
            $model->authorityList = authorityList::fromMap($map['AuthorityList']);
        }

        return $model;
    }
}
