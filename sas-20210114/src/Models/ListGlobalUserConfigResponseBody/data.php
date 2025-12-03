<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\ListGlobalUserConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $globalConfigSwitch;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'globalConfigSwitch' => 'GlobalConfigSwitch',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalConfigSwitch) {
            $res['GlobalConfigSwitch'] = $this->globalConfigSwitch;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
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
        if (isset($map['GlobalConfigSwitch'])) {
            $model->globalConfigSwitch = $map['GlobalConfigSwitch'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
