<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\SaveReceiverDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class SaveReceiverDetailResponseBody extends Model
{
    /**
     * @description List of recipient addresses that failed to upload.
     *
     * @var data
     */
    public $data;

    /**
     * @description Number of errors.
     *
     * @example 638
     *
     * @var int
     */
    public $errorCount;

    /**
     * @description Request ID
     *
     * @example 10A1AD70-E48E-476D-98D9-39BD92193837
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Number of successes.
     *
     * @example 274
     *
     * @var int
     */
    public $successCount;
    protected $_name = [
        'data' => 'Data',
        'errorCount' => 'ErrorCount',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveReceiverDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
