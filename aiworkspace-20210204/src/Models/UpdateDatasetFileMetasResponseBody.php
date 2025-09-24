<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateDatasetFileMetasResponseBody extends Model
{
    /**
     * @var DatasetFileMetaResponse[]
     */
    public $failedDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'failedDetails' => 'FailedDetails',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->failedDetails)) {
            Model::validateArray($this->failedDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedDetails) {
            if (\is_array($this->failedDetails)) {
                $res['FailedDetails'] = [];
                $n1 = 0;
                foreach ($this->failedDetails as $item1) {
                    $res['FailedDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FailedDetails'])) {
            if (!empty($map['FailedDetails'])) {
                $model->failedDetails = [];
                $n1 = 0;
                foreach ($map['FailedDetails'] as $item1) {
                    $model->failedDetails[$n1] = DatasetFileMetaResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
