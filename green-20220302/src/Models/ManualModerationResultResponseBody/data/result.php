<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ManualModerationResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Label description
     *
     * @example no risk
     *
     * @var string
     */
    public $description;

    /**
     * @description Risk label
     *
     * @example violent_explosion
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'description' => 'Description',
        'label' => 'Label',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
