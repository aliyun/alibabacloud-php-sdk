<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetStatisticsRecordsByFeeIdRequest extends Model
{
    /**
     * @example ab7ce59f-a68a-4a6f-82a6-6460fadc9a70
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
     * @return GetStatisticsRecordsByFeeIdRequest
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
