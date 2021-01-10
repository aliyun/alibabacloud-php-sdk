<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs\editingInputs\editingInput;
use AlibabaCloud\Tea\Model;

class editingInputs extends Model
{
    /**
     * @var editingInput[]
     */
    public $editingInput;
    protected $_name = [
        'editingInput' => 'EditingInput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingInput) {
            $res['EditingInput'] = [];
            if (null !== $this->editingInput && \is_array($this->editingInput)) {
                $n = 0;
                foreach ($this->editingInput as $item) {
                    $res['EditingInput'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return editingInputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingInput'])) {
            if (!empty($map['EditingInput'])) {
                $model->editingInput = [];
                $n                   = 0;
                foreach ($map['EditingInput'] as $item) {
                    $model->editingInput[$n++] = null !== $item ? editingInput::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
