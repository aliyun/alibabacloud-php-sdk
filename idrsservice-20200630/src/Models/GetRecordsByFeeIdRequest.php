<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetRecordsByFeeIdRequest extends Model
{
    /**
     * @example 6c94f2a7-632d-4ea0-aa06-a97800a9060f
     *
     * @var string
     */
    public $feeId;
    protected $_name = [
        'feeId' => 'FeeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feeId) {
            $res['FeeId'] = $this->feeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecordsByFeeIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeeId'])) {
            $model->feeId = $map['FeeId'];
        }

        return $model;
    }
}
