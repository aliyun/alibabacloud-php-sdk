<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\showModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\spnTypeNameList;
use AlibabaCloud\Tea\Model;

class moduleMapList extends Model
{
    /**
     * @var filterModules[]
     */
    public $filterModules;

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

    /**
     * @var showModules[]
     */
    public $showModules;

    /**
     * @var string[]
     */
    public $spnTypeList;

    /**
     * @var DataModuleMapListSpnTypeMapListValue[][]
     */
    public $spnTypeMapList;

    /**
     * @var spnTypeNameList[]
     */
    public $spnTypeNameList;
    protected $_name = [
        'filterModules' => 'FilterModules',
        'moduleCode' => 'ModuleCode',
        'moduleId' => 'ModuleId',
        'moduleName' => 'ModuleName',
        'showModules' => 'ShowModules',
        'spnTypeList' => 'SpnTypeList',
        'spnTypeMapList' => 'SpnTypeMapList',
        'spnTypeNameList' => 'SpnTypeNameList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterModules) {
            $res['FilterModules'] = [];
            if (null !== $this->filterModules && \is_array($this->filterModules)) {
                $n = 0;
                foreach ($this->filterModules as $item) {
                    $res['FilterModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->showModules) {
            $res['ShowModules'] = [];
            if (null !== $this->showModules && \is_array($this->showModules)) {
                $n = 0;
                foreach ($this->showModules as $item) {
                    $res['ShowModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spnTypeList) {
            $res['SpnTypeList'] = $this->spnTypeList;
        }
        if (null !== $this->spnTypeMapList) {
            $res['SpnTypeMapList'] = $this->spnTypeMapList;
        }
        if (null !== $this->spnTypeNameList) {
            $res['SpnTypeNameList'] = [];
            if (null !== $this->spnTypeNameList && \is_array($this->spnTypeNameList)) {
                $n = 0;
                foreach ($this->spnTypeNameList as $item) {
                    $res['SpnTypeNameList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleMapList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n = 0;
                foreach ($map['FilterModules'] as $item) {
                    $model->filterModules[$n++] = null !== $item ? filterModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ShowModules'])) {
            if (!empty($map['ShowModules'])) {
                $model->showModules = [];
                $n = 0;
                foreach ($map['ShowModules'] as $item) {
                    $model->showModules[$n++] = null !== $item ? showModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SpnTypeList'])) {
            if (!empty($map['SpnTypeList'])) {
                $model->spnTypeList = $map['SpnTypeList'];
            }
        }
        if (isset($map['SpnTypeMapList'])) {
            if (!empty($map['SpnTypeMapList'])) {
                $model->spnTypeMapList = $map['SpnTypeMapList'];
            }
        }
        if (isset($map['SpnTypeNameList'])) {
            if (!empty($map['SpnTypeNameList'])) {
                $model->spnTypeNameList = [];
                $n = 0;
                foreach ($map['SpnTypeNameList'] as $item) {
                    $model->spnTypeNameList[$n++] = null !== $item ? spnTypeNameList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
