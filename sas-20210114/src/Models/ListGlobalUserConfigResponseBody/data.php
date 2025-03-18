<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\ListGlobalUserConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $globalConfigSwitch;

    /**
     * @example ransomware_breaking
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'globalConfigSwitch' => 'GlobalConfigSwitch',
        'moduleName' => 'ModuleName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
