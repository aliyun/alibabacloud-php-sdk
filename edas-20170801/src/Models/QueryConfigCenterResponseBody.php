<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryConfigCenterResponseBody\configCenterInfo;
use AlibabaCloud\Tea\Model;

class QueryConfigCenterResponseBody extends Model
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
     * @var configCenterInfo
     */
    public $configCenterInfo;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'configCenterInfo' => 'configCenterInfo',
        'code'             => 'Code',
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
        if (null !== $this->configCenterInfo) {
            $res['configCenterInfo'] = null !== $this->configCenterInfo ? $this->configCenterInfo->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryConfigCenterResponseBody
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
        if (isset($map['configCenterInfo'])) {
            $model->configCenterInfo = configCenterInfo::fromMap($map['configCenterInfo']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
