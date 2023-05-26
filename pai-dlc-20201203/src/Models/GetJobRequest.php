<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $needDetail;
    protected $_name = [
        'needDetail' => 'NeedDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needDetail) {
            $res['NeedDetail'] = $this->needDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedDetail'])) {
            $model->needDetail = $map['NeedDetail'];
        }

        return $model;
    }
}
