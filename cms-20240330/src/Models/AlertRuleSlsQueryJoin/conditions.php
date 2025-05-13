<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleSlsQueryJoin;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $firstField;

    /**
     * @var string
     */
    public $oper;

    /**
     * @var string
     */
    public $secondField;
    protected $_name = [
        'firstField' => 'firstField',
        'oper' => 'oper',
        'secondField' => 'secondField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstField) {
            $res['firstField'] = $this->firstField;
        }

        if (null !== $this->oper) {
            $res['oper'] = $this->oper;
        }

        if (null !== $this->secondField) {
            $res['secondField'] = $this->secondField;
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
        if (isset($map['firstField'])) {
            $model->firstField = $map['firstField'];
        }

        if (isset($map['oper'])) {
            $model->oper = $map['oper'];
        }

        if (isset($map['secondField'])) {
            $model->secondField = $map['secondField'];
        }

        return $model;
    }
}
