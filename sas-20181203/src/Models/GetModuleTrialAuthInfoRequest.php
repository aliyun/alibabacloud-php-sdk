<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetModuleTrialAuthInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;
    /**
     * @var string
     */
    public $moduleCode;
    protected $_name = [
        'lang'       => 'Lang',
        'moduleCode' => 'ModuleCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        return $model;
    }
}
