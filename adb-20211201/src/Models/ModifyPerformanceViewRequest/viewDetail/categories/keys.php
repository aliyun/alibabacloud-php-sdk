<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyPerformanceViewRequest\viewDetail\categories;

use AlibabaCloud\Dara\Model;

class keys extends Model
{
    /**
     * @var string
     */
    public $keyName;
    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'keyName'  => 'KeyName',
        'selected' => 'Selected',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
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
        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
