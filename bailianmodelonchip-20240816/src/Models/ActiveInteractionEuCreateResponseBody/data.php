<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\ActiveInteractionEuCreateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gesture;

    /**
     * @var string
     */
    public $person;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'gesture' => 'gesture',
        'person' => 'person',
        'scene' => 'scene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gesture) {
            $res['gesture'] = $this->gesture;
        }

        if (null !== $this->person) {
            $res['person'] = $this->person;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
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
        if (isset($map['gesture'])) {
            $model->gesture = $map['gesture'];
        }

        if (isset($map['person'])) {
            $model->person = $map['person'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
