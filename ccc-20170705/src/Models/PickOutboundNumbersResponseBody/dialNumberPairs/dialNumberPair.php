<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody\dialNumberPairs;

use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody\dialNumberPairs\dialNumberPair\callee;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickOutboundNumbersResponseBody\dialNumberPairs\dialNumberPair\caller;
use AlibabaCloud\Tea\Model;

class dialNumberPair extends Model
{
    /**
     * @var caller
     */
    public $caller;

    /**
     * @var callee
     */
    public $callee;
    protected $_name = [
        'caller' => 'Caller',
        'callee' => 'Callee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = null !== $this->caller ? $this->caller->toMap() : null;
        }
        if (null !== $this->callee) {
            $res['Callee'] = null !== $this->callee ? $this->callee->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialNumberPair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = caller::fromMap($map['Caller']);
        }
        if (isset($map['Callee'])) {
            $model->callee = callee::fromMap($map['Callee']);
        }

        return $model;
    }
}
