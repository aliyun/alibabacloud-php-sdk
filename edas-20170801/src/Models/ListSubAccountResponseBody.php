<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListSubAccountResponseBody\subAccountList;
use AlibabaCloud\Tea\Model;

class ListSubAccountResponseBody extends Model
{
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
     * @example message
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

    /**
     * @description The RAM users.
     *
     * @var subAccountList
     */
    public $subAccountList;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'subAccountList' => 'SubAccountList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subAccountList) {
            $res['SubAccountList'] = null !== $this->subAccountList ? $this->subAccountList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubAccountList'])) {
            $model->subAccountList = subAccountList::fromMap($map['SubAccountList']);
        }

        return $model;
    }
}
