<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FixCheckWarningsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $batchId;
    protected $_name = [
        'requestId' => 'RequestId',
        'batchId'   => 'BatchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FixCheckWarningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        return $model;
    }
}
