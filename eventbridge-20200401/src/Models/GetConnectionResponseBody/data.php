<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetConnectionResponseBody\data\connections;

class data extends Model
{
    /**
     * @var connections[]
     */
    public $connections;
    protected $_name = [
        'connections' => 'Connections',
    ];

    public function validate()
    {
        if (\is_array($this->connections)) {
            Model::validateArray($this->connections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connections) {
            if (\is_array($this->connections)) {
                $res['Connections'] = [];
                $n1                 = 0;
                foreach ($this->connections as $item1) {
                    $res['Connections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Connections'])) {
            if (!empty($map['Connections'])) {
                $model->connections = [];
                $n1                 = 0;
                foreach ($map['Connections'] as $item1) {
                    $model->connections[$n1++] = connections::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
