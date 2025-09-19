<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GrantSwitchAgreementRequest extends Model
{
    /**
     * @var bool
     */
    public $isAgree;

    /**
     * @var bool
     */
    public $isImmediate;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'isAgree' => 'IsAgree',
        'isImmediate' => 'IsImmediate',
        'lang' => 'Lang',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAgree) {
            $res['IsAgree'] = $this->isAgree;
        }

        if (null !== $this->isImmediate) {
            $res['IsImmediate'] = $this->isImmediate;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['IsAgree'])) {
            $model->isAgree = $map['IsAgree'];
        }

        if (isset($map['IsImmediate'])) {
            $model->isImmediate = $map['IsImmediate'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
