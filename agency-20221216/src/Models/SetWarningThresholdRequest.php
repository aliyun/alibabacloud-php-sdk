<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class SetWarningThresholdRequest extends Model
{
    /**
     * @var int
     */
    public $uid;

    /**
     * @var string
     */
    public $warningValue;
    protected $_name = [
        'uid' => 'Uid',
        'warningValue' => 'WarningValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->warningValue) {
            $res['WarningValue'] = $this->warningValue;
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
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['WarningValue'])) {
            $model->warningValue = $map['WarningValue'];
        }

        return $model;
    }
}
