<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ExecuteAdhocWorkflowInstanceRequest\tasks;

use AlibabaCloud\Dara\Model;

class script extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $parameters;
    protected $_name = [
        'content'    => 'Content',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
