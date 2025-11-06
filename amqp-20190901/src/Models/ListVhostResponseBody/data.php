<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListVhostResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListVhostResponseBody\data\vhosts;

class data extends Model
{
    /**
     * @var vhosts[]
     */
    public $vhosts;
    protected $_name = [
        'vhosts' => 'Vhosts',
    ];

    public function validate()
    {
        if (\is_array($this->vhosts)) {
            Model::validateArray($this->vhosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vhosts) {
            if (\is_array($this->vhosts)) {
                $res['Vhosts'] = [];
                $n1 = 0;
                foreach ($this->vhosts as $item1) {
                    $res['Vhosts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Vhosts'])) {
            if (!empty($map['Vhosts'])) {
                $model->vhosts = [];
                $n1 = 0;
                foreach ($map['Vhosts'] as $item1) {
                    $model->vhosts[$n1] = vhosts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
