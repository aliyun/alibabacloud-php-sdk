<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListKyuubiServicesResponseBody\data\kyuubiServices;

class data extends Model
{
    /**
     * @var kyuubiServices[]
     */
    public $kyuubiServices;
    protected $_name = [
        'kyuubiServices' => 'kyuubiServices',
    ];

    public function validate()
    {
        if (\is_array($this->kyuubiServices)) {
            Model::validateArray($this->kyuubiServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kyuubiServices) {
            if (\is_array($this->kyuubiServices)) {
                $res['kyuubiServices'] = [];
                $n1 = 0;
                foreach ($this->kyuubiServices as $item1) {
                    $res['kyuubiServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['kyuubiServices'])) {
            if (!empty($map['kyuubiServices'])) {
                $model->kyuubiServices = [];
                $n1 = 0;
                foreach ($map['kyuubiServices'] as $item1) {
                    $model->kyuubiServices[$n1] = kyuubiServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
