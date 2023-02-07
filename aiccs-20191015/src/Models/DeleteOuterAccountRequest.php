<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DeleteOuterAccountRequest extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $outerAccountId;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $outerAccountType;
    protected $_name = [
        'outerAccountId'   => 'OuterAccountId',
        'outerAccountType' => 'OuterAccountType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerAccountId) {
            $res['OuterAccountId'] = $this->outerAccountId;
        }
        if (null !== $this->outerAccountType) {
            $res['OuterAccountType'] = $this->outerAccountType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOuterAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterAccountId'])) {
            $model->outerAccountId = $map['OuterAccountId'];
        }
        if (isset($map['OuterAccountType'])) {
            $model->outerAccountType = $map['OuterAccountType'];
        }

        return $model;
    }
}
