<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest\commonParam;

use AlibabaCloud\Dara\Model;

class alertList extends Model
{
    /**
     * @var int
     */
    public $isCritical;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $symbols;
    protected $_name = [
        'isCritical' => 'IsCritical',
        'name' => 'Name',
        'symbols' => 'Symbols',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isCritical) {
            $res['IsCritical'] = $this->isCritical;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->symbols) {
            $res['Symbols'] = $this->symbols;
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
        if (isset($map['IsCritical'])) {
            $model->isCritical = $map['IsCritical'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Symbols'])) {
            $model->symbols = $map['Symbols'];
        }

        return $model;
    }
}
