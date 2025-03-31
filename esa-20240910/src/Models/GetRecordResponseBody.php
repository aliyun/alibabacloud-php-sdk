<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel;

class GetRecordResponseBody extends Model
{
    /**
     * @var recordModel
     */
    public $recordModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recordModel' => 'RecordModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recordModel) {
            $this->recordModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordModel) {
            $res['RecordModel'] = null !== $this->recordModel ? $this->recordModel->toArray($noStream) : $this->recordModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
