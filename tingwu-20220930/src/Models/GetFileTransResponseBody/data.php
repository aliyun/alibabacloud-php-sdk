<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20220930\Models\GetFileTransResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example f7de74778d94422283534102dfc0****
     *
     * @var string
     */
    public $transId;

    /**
     * @example trans_123
     *
     * @var string
     */
    public $transKey;

    /**
     * @example ONGOING
     *
     * @var string
     */
    public $transStatus;
    protected $_name = [
        'transId'     => 'TransId',
        'transKey'    => 'TransKey',
        'transStatus' => 'TransStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transId) {
            $res['TransId'] = $this->transId;
        }
        if (null !== $this->transKey) {
            $res['TransKey'] = $this->transKey;
        }
        if (null !== $this->transStatus) {
            $res['TransStatus'] = $this->transStatus;
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
        if (isset($map['TransId'])) {
            $model->transId = $map['TransId'];
        }
        if (isset($map['TransKey'])) {
            $model->transKey = $map['TransKey'];
        }
        if (isset($map['TransStatus'])) {
            $model->transStatus = $map['TransStatus'];
        }

        return $model;
    }
}
