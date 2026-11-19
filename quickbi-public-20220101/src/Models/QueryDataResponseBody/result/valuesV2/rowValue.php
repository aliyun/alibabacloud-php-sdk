<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result\valuesV2;

use AlibabaCloud\Dara\Model;

class rowValue extends Model
{
    /**
     * @var string
     */
    public $l;

    /**
     * @var string
     */
    public $r;

    /**
     * @var string
     */
    public $v;
    protected $_name = [
        'l' => 'L',
        'r' => 'R',
        'v' => 'V',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->l) {
            $res['L'] = $this->l;
        }

        if (null !== $this->r) {
            $res['R'] = $this->r;
        }

        if (null !== $this->v) {
            $res['V'] = $this->v;
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
        if (isset($map['L'])) {
            $model->l = $map['L'];
        }

        if (isset($map['R'])) {
            $model->r = $map['R'];
        }

        if (isset($map['V'])) {
            $model->v = $map['V'];
        }

        return $model;
    }
}
