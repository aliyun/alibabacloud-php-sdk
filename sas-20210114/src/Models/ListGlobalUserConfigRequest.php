<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class ListGlobalUserConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $moduleList;
    protected $_name = [
        'moduleList' => 'ModuleList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleList) {
            $res['ModuleList'] = $this->moduleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGlobalUserConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleList'])) {
            if (!empty($map['ModuleList'])) {
                $model->moduleList = $map['ModuleList'];
            }
        }

        return $model;
    }
}
