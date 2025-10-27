<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasResponseBody\alias;

class UpdateFlowAliasResponseBody extends Model
{
    /**
     * @var alias
     */
    public $alias;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alias' => 'Alias',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->alias) {
            $this->alias->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = null !== $this->alias ? $this->alias->toArray($noStream) : $this->alias;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Alias'])) {
            $model->alias = alias::fromMap($map['Alias']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
