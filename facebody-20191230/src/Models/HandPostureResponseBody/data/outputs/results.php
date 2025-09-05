<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\box;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands;

class results extends Model
{
    /**
     * @var box
     */
    public $box;

    /**
     * @var hands
     */
    public $hands;
    protected $_name = [
        'box' => 'Box',
        'hands' => 'Hands',
    ];

    public function validate()
    {
        if (null !== $this->box) {
            $this->box->validate();
        }
        if (null !== $this->hands) {
            $this->hands->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toArray($noStream) : $this->box;
        }

        if (null !== $this->hands) {
            $res['Hands'] = null !== $this->hands ? $this->hands->toArray($noStream) : $this->hands;
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
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }

        if (isset($map['Hands'])) {
            $model->hands = hands::fromMap($map['Hands']);
        }

        return $model;
    }
}
