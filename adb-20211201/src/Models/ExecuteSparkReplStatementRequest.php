<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ExecuteSparkReplStatementRequest extends Model
{
    /**
     * @example s202411071444hzdvk486d9d2001****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example print(1+1)
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example PYTHON
     *
     * @var string
     */
    public $codeType;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $sessionId;
    protected $_name = [
        'appId'     => 'AppId',
        'code'      => 'Code',
        'codeType'  => 'CodeType',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteSparkReplStatementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
