<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items\originProbe\lastResult;

class originProbe extends Model
{
    /**
     * @var lastResult
     */
    public $lastResult;
    protected $_name = [
        'lastResult' => 'lastResult',
    ];

    public function validate()
    {
        if (null !== $this->lastResult) {
            $this->lastResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastResult) {
            $res['lastResult'] = null !== $this->lastResult ? $this->lastResult->toArray($noStream) : $this->lastResult;
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
        if (isset($map['lastResult'])) {
            $model->lastResult = lastResult::fromMap($map['lastResult']);
        }

        return $model;
    }
}
