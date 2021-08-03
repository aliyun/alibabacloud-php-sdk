<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CheckUserInSecurityCenterWhiteListResponseBody extends Model
{
    /**
     * @var bool
     */
    public $inWhiteList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inWhiteList' => 'InWhiteList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inWhiteList) {
            $res['InWhiteList'] = $this->inWhiteList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckUserInSecurityCenterWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InWhiteList'])) {
            $model->inWhiteList = $map['InWhiteList'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
