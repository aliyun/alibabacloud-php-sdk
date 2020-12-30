<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponseBody\tokenList;
use AlibabaCloud\Tea\Model;

class GetTokenListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tokenList
     */
    public $tokenList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'requestId' => 'RequestId',
        'tokenList' => 'TokenList',
        'code'      => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tokenList) {
            $res['TokenList'] = null !== $this->tokenList ? $this->tokenList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TokenList'])) {
            $model->tokenList = tokenList::fromMap($map['TokenList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
