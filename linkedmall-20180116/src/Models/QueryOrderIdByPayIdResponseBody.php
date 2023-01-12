<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody\lmOrderIds;
use AlibabaCloud\Tea\Model;

class QueryOrderIdByPayIdResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var lmOrderIds
     */
    public $lmOrderIds;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 79C01D47-3C44-57D9-BC99-1B33F7ED14B8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'lmOrderIds' => 'LmOrderIds',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
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
        if (null !== $this->lmOrderIds) {
            $res['LmOrderIds'] = null !== $this->lmOrderIds ? $this->lmOrderIds->toMap() : null;
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
     * @return QueryOrderIdByPayIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LmOrderIds'])) {
            $model->lmOrderIds = lmOrderIds::fromMap($map['LmOrderIds']);
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
