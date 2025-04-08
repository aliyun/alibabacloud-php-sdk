<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersResponseBody\data\callee;
use AlibabaCloud\SDK\CCC\V20200701\Models\PickOutboundNumbersResponseBody\data\caller;

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
        if (null !== $this->callee) {
            $this->callee->validate();
        }
        if (null !== $this->caller) {
            $this->caller->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = null !== $this->callee ? $this->callee->toArray($noStream) : $this->callee;
        }

        if (null !== $this->caller) {
            $res['Caller'] = null !== $this->caller ? $this->caller->toArray($noStream) : $this->caller;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
