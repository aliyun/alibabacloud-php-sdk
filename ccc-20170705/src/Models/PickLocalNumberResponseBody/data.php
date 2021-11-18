<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\PickLocalNumberResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\PickLocalNumberResponseBody\data\callee;
use AlibabaCloud\SDK\CCC\V20170705\Models\PickLocalNumberResponseBody\data\caller;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var callee
     */
    public $callee;

    /**
     * @var caller
     */
    public $caller;
    protected $_name = [
        'callee' => 'Callee',
        'caller' => 'Caller',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = null !== $this->callee ? $this->callee->toMap() : null;
        }
        if (null !== $this->caller) {
            $res['Caller'] = null !== $this->caller ? $this->caller->toMap() : null;
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
        if (isset($map['Callee'])) {
            $model->callee = callee::fromMap($map['Callee']);
        }
        if (isset($map['Caller'])) {
            $model->caller = caller::fromMap($map['Caller']);
        }

        return $model;
    }
}
