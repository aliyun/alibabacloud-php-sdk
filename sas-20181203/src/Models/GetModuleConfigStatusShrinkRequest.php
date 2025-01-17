<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetModuleConfigStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $moduleNamesShrink;
    protected $_name = [
        'moduleNamesShrink' => 'ModuleNames',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleNamesShrink) {
            $res['ModuleNames'] = $this->moduleNamesShrink;
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
        if (isset($map['ModuleNames'])) {
            $model->moduleNamesShrink = $map['ModuleNames'];
        }

        return $model;
    }
}
