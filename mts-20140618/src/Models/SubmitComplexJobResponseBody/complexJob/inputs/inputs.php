<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\inputs\inputs\editingInputs;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @var editingInputs
     */
    public $editingInputs;
    protected $_name = [
        'editingInputs' => 'EditingInputs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingInputs) {
            $res['EditingInputs'] = null !== $this->editingInputs ? $this->editingInputs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingInputs'])) {
            $model->editingInputs = editingInputs::fromMap($map['EditingInputs']);
        }

        return $model;
    }
}
