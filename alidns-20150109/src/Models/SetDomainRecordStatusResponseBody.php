<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRecordStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $recordId;
    protected $_name = [
        'status'    => 'Status',
        'requestId' => 'RequestId',
        'recordId'  => 'RecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainRecordStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
