<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\DeleteTopicRouteTableResponseBody;

use AlibabaCloud\Dara\Model;

class failureTopics extends Model
{
    /**
     * @var mixed[][]
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
                    if (\is_array($item1)) {
                        $res['Topic'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Topic'][$n1][$key2] = $value2;
                        }
                    }
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
                    if (!empty($item1)) {
                        $model->topic[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->topic[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
