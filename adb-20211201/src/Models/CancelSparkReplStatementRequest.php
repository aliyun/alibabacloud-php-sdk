<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CancelSparkReplStatementRequest extends Model
{
    /**
     * @example s202411071444hzdvk486d9d2001****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 456
     *
     * @var int
     */
    public $sessionId;

    /**
     * @example 123
     *
     * @var int
     */
    public $statementId;
    protected $_name = [
        'appId'       => 'AppId',
        'sessionId'   => 'SessionId',
        'statementId' => 'StatementId',
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
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->statementId) {
            $res['StatementId'] = $this->statementId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelSparkReplStatementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['StatementId'])) {
            $model->statementId = $map['StatementId'];
        }

        return $model;
    }
}
