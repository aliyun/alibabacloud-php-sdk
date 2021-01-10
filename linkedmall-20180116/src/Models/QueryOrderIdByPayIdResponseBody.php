<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderIdByPayIdResponseBody\lmOrderIds;
use AlibabaCloud\Tea\Model;

class QueryOrderIdByPayIdResponseBody extends Model
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
     * @var lmOrderIds
     */
    public $lmOrderIds;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'lmOrderIds' => 'LmOrderIds',
        'code'       => 'Code',
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
        if (null !== $this->lmOrderIds) {
            $res['LmOrderIds'] = null !== $this->lmOrderIds ? $this->lmOrderIds->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LmOrderIds'])) {
            $model->lmOrderIds = lmOrderIds::fromMap($map['LmOrderIds']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
