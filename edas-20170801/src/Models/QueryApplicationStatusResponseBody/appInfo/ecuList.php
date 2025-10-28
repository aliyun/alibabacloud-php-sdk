<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\ecuList\ecu;

class ecuList extends Model
{
    /**
     * @var ecu[]
     */
    public $ecu;
    protected $_name = [
        'ecu' => 'Ecu',
    ];

    public function validate()
    {
        if (\is_array($this->ecu)) {
            Model::validateArray($this->ecu);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecu) {
            if (\is_array($this->ecu)) {
                $res['Ecu'] = [];
                $n1 = 0;
                foreach ($this->ecu as $item1) {
                    $res['Ecu'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ecu'])) {
            if (!empty($map['Ecu'])) {
                $model->ecu = [];
                $n1 = 0;
                foreach ($map['Ecu'] as $item1) {
                    $model->ecu[$n1] = ecu::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
