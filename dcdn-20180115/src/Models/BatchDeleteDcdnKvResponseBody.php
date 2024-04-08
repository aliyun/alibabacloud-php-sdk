<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDcdnKvResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failKeys;

    /**
     * @example EEEBE525-F576-1196-8DAF-2D70CA3F4D2F
     *
     * @var string
     */
    public $requestId;

    /**
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
     * @return BatchDeleteDcdnKvResponseBody
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
