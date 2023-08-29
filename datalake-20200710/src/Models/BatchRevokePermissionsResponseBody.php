<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class BatchRevokePermissionsResponseBody extends Model
{
    /**
     * @description result
     *
     * @var GrantRevokeFailureEntry[]
     */
    public $batchGrantRevokeFailureResult;

    /**
     * @description Response Code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description Message Code
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @example C9E535E1-F040-56F4-B4EE-592B555DAE19
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'batchGrantRevokeFailureResult' => 'BatchGrantRevokeFailureResult',
        'code'                          => 'Code',
        'message'                       => 'Message',
        'requestId'                     => 'RequestId',
        'success'                       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchGrantRevokeFailureResult) {
            $res['BatchGrantRevokeFailureResult'] = [];
            if (null !== $this->batchGrantRevokeFailureResult && \is_array($this->batchGrantRevokeFailureResult)) {
                $n = 0;
                foreach ($this->batchGrantRevokeFailureResult as $item) {
                    $res['BatchGrantRevokeFailureResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return BatchRevokePermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchGrantRevokeFailureResult'])) {
            if (!empty($map['BatchGrantRevokeFailureResult'])) {
                $model->batchGrantRevokeFailureResult = [];
                $n                                    = 0;
                foreach ($map['BatchGrantRevokeFailureResult'] as $item) {
                    $model->batchGrantRevokeFailureResult[$n++] = null !== $item ? GrantRevokeFailureEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
