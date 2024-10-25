<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRulesResponseBody\pagingInfo;
use AlibabaCloud\Tea\Model;

class ListDataQualityRulesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var pagingInfo
     */
    public $pagingInfo;

    /**
     * @example 691CA452-D37A-4ED0-9441
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'pagingInfo' => 'PagingInfo',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pagingInfo) {
            $res['PagingInfo'] = null !== $this->pagingInfo ? $this->pagingInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataQualityRulesResponseBody
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
        if (isset($map['PagingInfo'])) {
            $model->pagingInfo = pagingInfo::fromMap($map['PagingInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
