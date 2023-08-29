<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data;

use AlibabaCloud\Tea\Model;

class kmoduleVerificationResult extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $code;

    /**
     * @example null
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'code'   => 'code',
        'status' => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kmoduleVerificationResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
