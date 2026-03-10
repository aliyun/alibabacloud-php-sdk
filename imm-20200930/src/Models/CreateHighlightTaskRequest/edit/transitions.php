<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateHighlightTaskRequest\edit;

use AlibabaCloud\Dara\Model;

class transitions extends Model
{
    /**
     * @var float
     */
    public $duration;

    /**
     * @var string
     */
    public $transition;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'duration' => 'Duration',
        'transition' => 'Transition',
        'weight' => 'Weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->transition) {
            $res['Transition'] = $this->transition;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Transition'])) {
            $model->transition = $map['Transition'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
