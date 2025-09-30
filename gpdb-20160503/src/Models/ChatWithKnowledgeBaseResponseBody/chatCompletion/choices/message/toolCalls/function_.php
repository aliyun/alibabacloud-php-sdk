<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\chatCompletion\choices\message\toolCalls;

use AlibabaCloud\Dara\Model;

class function_ extends Model
{
    /**
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'arguments' => 'Arguments',
        'name' => 'Name',
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
