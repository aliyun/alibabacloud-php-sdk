<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody\commodityCodesInfo;

use AlibabaCloud\Dara\Model;

class moduleCodesInfo extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
