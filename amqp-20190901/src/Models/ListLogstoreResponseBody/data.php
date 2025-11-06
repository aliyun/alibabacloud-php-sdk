<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListLogstoreResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $logstores;
    protected $_name = [
        'logstores' => 'Logstores',
    ];

    public function validate()
    {
        if (\is_array($this->logstores)) {
            Model::validateArray($this->logstores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logstores) {
            if (\is_array($this->logstores)) {
                $res['Logstores'] = [];
                $n1 = 0;
                foreach ($this->logstores as $item1) {
                    $res['Logstores'][$n1] = $item1;
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
        if (isset($map['Logstores'])) {
            if (!empty($map['Logstores'])) {
                $model->logstores = [];
                $n1 = 0;
                foreach ($map['Logstores'] as $item1) {
                    $model->logstores[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
