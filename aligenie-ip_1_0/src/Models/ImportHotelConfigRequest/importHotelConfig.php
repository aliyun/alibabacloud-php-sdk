<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ImportHotelConfigRequest\importHotelConfig\rcuCustomScenes;

class importHotelConfig extends Model
{
    /**
     * @var rcuCustomScenes[]
     */
    public $rcuCustomScenes;
    protected $_name = [
        'rcuCustomScenes' => 'RcuCustomScenes',
    ];

    public function validate()
    {
        if (\is_array($this->rcuCustomScenes)) {
            Model::validateArray($this->rcuCustomScenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rcuCustomScenes) {
            if (\is_array($this->rcuCustomScenes)) {
                $res['RcuCustomScenes'] = [];
                $n1 = 0;
                foreach ($this->rcuCustomScenes as $item1) {
                    $res['RcuCustomScenes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RcuCustomScenes'])) {
            if (!empty($map['RcuCustomScenes'])) {
                $model->rcuCustomScenes = [];
                $n1 = 0;
                foreach ($map['RcuCustomScenes'] as $item1) {
                    $model->rcuCustomScenes[$n1] = rcuCustomScenes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
