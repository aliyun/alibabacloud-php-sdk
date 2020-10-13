<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponse\tokenList;
use AlibabaCloud\Tea\Model;

class GetTokenListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var tokenList
     */
    public $tokenList;
    protected $_name = [
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'tokenList' => 'TokenList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('tokenList', $this->tokenList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->tokenList) {
            $res['TokenList'] = null !== $this->tokenList ? $this->tokenList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['TokenList'])) {
            $model->tokenList = tokenList::fromMap($map['TokenList']);
        }

        return $model;
    }
}
