<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostErrorByTaskIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetVhostErrorByTaskIdResponseBody\data\voList\vhostErrorDO;

class voList extends Model
{
    /**
     * @var vhostErrorDO[]
     */
    public $vhostErrorDO;
    protected $_name = [
        'vhostErrorDO' => 'VhostErrorDO',
    ];

    public function validate()
    {
        if (\is_array($this->vhostErrorDO)) {
            Model::validateArray($this->vhostErrorDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vhostErrorDO) {
            if (\is_array($this->vhostErrorDO)) {
                $res['VhostErrorDO'] = [];
                $n1 = 0;
                foreach ($this->vhostErrorDO as $item1) {
                    $res['VhostErrorDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VhostErrorDO'])) {
            if (!empty($map['VhostErrorDO'])) {
                $model->vhostErrorDO = [];
                $n1 = 0;
                foreach ($map['VhostErrorDO'] as $item1) {
                    $model->vhostErrorDO[$n1] = vhostErrorDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
