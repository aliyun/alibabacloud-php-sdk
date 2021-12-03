<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\SubmitInternalPurchaseReadyFlagResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $missingBatchNumbers;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'message'             => 'Message',
        'missingBatchNumbers' => 'MissingBatchNumbers',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->missingBatchNumbers) {
            $res['MissingBatchNumbers'] = $this->missingBatchNumbers;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MissingBatchNumbers'])) {
            $model->missingBatchNumbers = $map['MissingBatchNumbers'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
