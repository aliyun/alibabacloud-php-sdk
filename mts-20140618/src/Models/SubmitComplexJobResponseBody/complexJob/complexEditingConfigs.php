<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs;
use AlibabaCloud\Tea\Model;

class complexEditingConfigs extends Model
{
    /**
     * @var complexEditingConfigs[]
     */
    public $complexEditingConfigs;
    protected $_name = [
        'complexEditingConfigs' => 'ComplexEditingConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complexEditingConfigs) {
            $res['ComplexEditingConfigs'] = [];
            if (null !== $this->complexEditingConfigs && \is_array($this->complexEditingConfigs)) {
                $n = 0;
                foreach ($this->complexEditingConfigs as $item) {
                    $res['ComplexEditingConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complexEditingConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplexEditingConfigs'])) {
            if (!empty($map['ComplexEditingConfigs'])) {
                $model->complexEditingConfigs = [];
                $n                            = 0;
                foreach ($map['ComplexEditingConfigs'] as $item) {
                    $model->complexEditingConfigs[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
