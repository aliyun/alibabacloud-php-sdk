<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;

use AlibabaCloud\Dara\Model;

class realTime extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $selectDisableTip;

    /**
     * @var bool
     */
    public $selectable;
    protected $_name = [
        'name' => 'Name',
        'selectDisableTip' => 'SelectDisableTip',
        'selectable' => 'Selectable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->selectDisableTip) {
            $res['SelectDisableTip'] = $this->selectDisableTip;
        }

        if (null !== $this->selectable) {
            $res['Selectable'] = $this->selectable;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SelectDisableTip'])) {
            $model->selectDisableTip = $map['SelectDisableTip'];
        }

        if (isset($map['Selectable'])) {
            $model->selectable = $map['Selectable'];
        }

        return $model;
    }
}
