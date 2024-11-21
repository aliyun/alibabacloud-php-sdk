<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteKvResponseBody extends Model
{
    /**
     * @description The keys that failed to be deleted.
     *
     * @var string[]
     */
    public $failKeys;

    /**
     * @description The request ID.
     *
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The keys that are deleted.
     *
     * @var string[]
     */
    public $successKeys;
    protected $_name = [
        'failKeys'    => 'FailKeys',
        'requestId'   => 'RequestId',
        'successKeys' => 'SuccessKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failKeys) {
            $res['FailKeys'] = $this->failKeys;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successKeys) {
            $res['SuccessKeys'] = $this->successKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteKvResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailKeys'])) {
            if (!empty($map['FailKeys'])) {
                $model->failKeys = $map['FailKeys'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessKeys'])) {
            if (!empty($map['SuccessKeys'])) {
                $model->successKeys = $map['SuccessKeys'];
            }
        }

        return $model;
    }
}
