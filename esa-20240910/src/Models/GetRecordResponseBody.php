<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel;
use AlibabaCloud\Tea\Model;

class GetRecordResponseBody extends Model
{
    /**
     * @description The information about the queried record.
     *
     * @var recordModel
     */
    public $recordModel;

    /**
     * @description The request ID.
     *
     * @example F32C57AA-7BF8-49AE-A2CC-9F42390F5A19
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordModel' => 'RecordModel',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordModel) {
            $res['RecordModel'] = null !== $this->recordModel ? $this->recordModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordModel'])) {
            $model->recordModel = recordModel::fromMap($map['RecordModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
