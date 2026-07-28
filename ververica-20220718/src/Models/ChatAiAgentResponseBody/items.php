<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed
     */
    public $args;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $hitlId;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'args' => 'args',
        'displayName' => 'displayName',
        'hitlId' => 'hitlId',
        'toolName' => 'toolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['args'] = $this->args;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->hitlId) {
            $res['hitlId'] = $this->hitlId;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
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
        if (isset($map['args'])) {
            $model->args = $map['args'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['hitlId'])) {
            $model->hitlId = $map['hitlId'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        return $model;
    }
}
