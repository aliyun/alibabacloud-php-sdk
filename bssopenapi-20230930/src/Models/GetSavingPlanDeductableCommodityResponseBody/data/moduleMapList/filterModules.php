<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList;

use AlibabaCloud\Dara\Model;

class filterModules extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'moduleCode' => 'ModuleCode',
        'moduleId' => 'ModuleId',
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

        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
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

        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
