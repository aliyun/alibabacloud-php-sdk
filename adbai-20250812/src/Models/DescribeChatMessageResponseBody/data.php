<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeChatMessageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'arguments' => 'Arguments',
        'callId' => 'CallId',
        'name' => 'Name',
        'output' => 'Output',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
