<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs;

use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\box;
use AlibabaCloud\SDK\Facebody\V20191230\Models\HandPostureResponseBody\data\outputs\results\hands;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var hands
     */
    public $hands;

    /**
     * @var box
     */
    public $box;
    protected $_name = [
        'hands' => 'Hands',
        'box'   => 'Box',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hands) {
            $res['Hands'] = null !== $this->hands ? $this->hands->toMap() : null;
        }
        if (null !== $this->box) {
            $res['Box'] = null !== $this->box ? $this->box->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hands'])) {
            $model->hands = hands::fromMap($map['Hands']);
        }
        if (isset($map['Box'])) {
            $model->box = box::fromMap($map['Box']);
        }

        return $model;
    }
}
