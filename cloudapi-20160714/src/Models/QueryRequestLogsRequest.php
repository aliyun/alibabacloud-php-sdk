<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class QueryRequestLogsRequest extends Model
{
    /**
     * @description The ID of the request log.
     *
     * This parameter is required.
     * @example 95657ED9-2F6F-426F-BD99-79C8********
     *
     * @var string
     */
    public $requestLogId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'requestLogId'  => 'RequestLogId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestLogId) {
            $res['RequestLogId'] = $this->requestLogId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRequestLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestLogId'])) {
            $model->requestLogId = $map['RequestLogId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
