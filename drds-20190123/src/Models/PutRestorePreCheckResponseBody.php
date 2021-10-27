<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\PutRestorePreCheckResponseBody\precheckBackupResult;
use AlibabaCloud\Tea\Model;

class PutRestorePreCheckResponseBody extends Model
{
    /**
     * @var precheckBackupResult
     */
    public $precheckBackupResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'precheckBackupResult' => 'PrecheckBackupResult',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->precheckBackupResult) {
            $res['PrecheckBackupResult'] = null !== $this->precheckBackupResult ? $this->precheckBackupResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutRestorePreCheckResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrecheckBackupResult'])) {
            $model->precheckBackupResult = precheckBackupResult::fromMap($map['PrecheckBackupResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
