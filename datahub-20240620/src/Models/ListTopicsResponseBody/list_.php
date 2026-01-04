<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models\ListTopicsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Datahub\V20240620\Models\ListTopicsResponseBody\list_\topic;

class list_ extends Model
{
    /**
     * @var topic[]
     */
    public $topic;
    protected $_name = [
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (\is_array($this->topic)) {
            Model::validateArray($this->topic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topic) {
            if (\is_array($this->topic)) {
                $res['Topic'] = [];
                $n1 = 0;
                foreach ($this->topic as $item1) {
                    $res['Topic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Topic'])) {
            if (!empty($map['Topic'])) {
                $model->topic = [];
                $n1 = 0;
                foreach ($map['Topic'] as $item1) {
                    $model->topic[$n1] = topic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
