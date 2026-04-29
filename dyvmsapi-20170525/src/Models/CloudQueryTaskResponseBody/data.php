<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudQueryTaskResponseBody\data\taskProperties;

class data extends Model
{
    /**
     * @var taskProperties[]
     */
    public $taskProperties;
    protected $_name = [
        'taskProperties' => 'TaskProperties',
    ];

    public function validate()
    {
        if (\is_array($this->taskProperties)) {
            Model::validateArray($this->taskProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskProperties) {
            if (\is_array($this->taskProperties)) {
                $res['TaskProperties'] = [];
                $n1 = 0;
                foreach ($this->taskProperties as $item1) {
                    $res['TaskProperties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskProperties'])) {
            if (!empty($map['TaskProperties'])) {
                $model->taskProperties = [];
                $n1 = 0;
                foreach ($map['TaskProperties'] as $item1) {
                    $model->taskProperties[$n1] = taskProperties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
