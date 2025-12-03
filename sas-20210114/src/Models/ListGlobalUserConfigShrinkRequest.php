<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class ListGlobalUserConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $moduleListShrink;
    protected $_name = [
        'moduleListShrink' => 'ModuleList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleListShrink) {
            $res['ModuleList'] = $this->moduleListShrink;
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
        if (isset($map['ModuleList'])) {
            $model->moduleListShrink = $map['ModuleList'];
        }

        return $model;
    }
}
