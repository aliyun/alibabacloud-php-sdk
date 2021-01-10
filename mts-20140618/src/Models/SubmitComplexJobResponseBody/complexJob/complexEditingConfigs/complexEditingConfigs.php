<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing;
use AlibabaCloud\Tea\Model;

class complexEditingConfigs extends Model
{
    /**
     * @var editing
     */
    public $editing;
    protected $_name = [
        'editing' => 'Editing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editing) {
            $res['Editing'] = null !== $this->editing ? $this->editing->toMap() : null;
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
        if (isset($map['Editing'])) {
            $model->editing = editing::fromMap($map['Editing']);
        }

        return $model;
    }
}
