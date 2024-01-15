<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions[]
     */
    public $conditions;
    protected $_name = [
        'conditions' => 'Conditions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
