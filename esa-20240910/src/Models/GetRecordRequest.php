<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRecordRequest extends Model
{
    /**
     * @description The record ID, which can be obtained by calling [ListRecords](https://help.aliyun.com/document_detail/2850265.html).
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $recordId;
    protected $_name = [
        'recordId' => 'RecordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        return $model;
    }
}
