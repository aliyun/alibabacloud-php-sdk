<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class ListGlobalUserConfigRequest extends Model
{
    /**
     * @var string[]
     */
    public $moduleList;
    protected $_name = [
        'moduleList' => 'ModuleList',
    ];

    public function validate()
    {
        if (\is_array($this->moduleList)) {
            Model::validateArray($this->moduleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleList) {
            if (\is_array($this->moduleList)) {
                $res['ModuleList'] = [];
                $n1 = 0;
                foreach ($this->moduleList as $item1) {
                    $res['ModuleList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ModuleList'])) {
                $model->moduleList = [];
                $n1 = 0;
                foreach ($map['ModuleList'] as $item1) {
                    $model->moduleList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
