<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class InitialSysomRequest extends Model
{
    /**
     * @var bool
     */
    public $checkOnly;
    protected $_name = [
        'checkOnly' => 'check_only',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkOnly) {
            $res['check_only'] = $this->checkOnly;
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
        if (isset($map['check_only'])) {
            $model->checkOnly = $map['check_only'];
        }

        return $model;
    }
}
