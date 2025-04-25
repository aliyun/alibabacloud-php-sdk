<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DataModuleMapListSpnTypeMapListValue;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\filterModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\showModules;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanDeductableCommodityResponseBody\data\moduleMapList\spnTypeNameList;

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

    public function validate()
    {
        if (\is_array($this->filterModules)) {
            Model::validateArray($this->filterModules);
        }
        if (\is_array($this->showModules)) {
            Model::validateArray($this->showModules);
        }
        if (\is_array($this->spnTypeList)) {
            Model::validateArray($this->spnTypeList);
        }
        if (\is_array($this->spnTypeMapList)) {
            Model::validateArray($this->spnTypeMapList);
        }
        if (\is_array($this->spnTypeNameList)) {
            Model::validateArray($this->spnTypeNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterModules) {
            if (\is_array($this->filterModules)) {
                $res['FilterModules'] = [];
                $n1 = 0;
                foreach ($this->filterModules as $item1) {
                    $res['FilterModules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->showModules)) {
                $res['ShowModules'] = [];
                $n1 = 0;
                foreach ($this->showModules as $item1) {
                    $res['ShowModules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->spnTypeList) {
            if (\is_array($this->spnTypeList)) {
                $res['SpnTypeList'] = [];
                $n1 = 0;
                foreach ($this->spnTypeList as $item1) {
                    $res['SpnTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->spnTypeMapList) {
            if (\is_array($this->spnTypeMapList)) {
                $res['SpnTypeMapList'] = [];
                $n1 = 0;
                foreach ($this->spnTypeMapList as $item1) {
                    if (\is_array($item1)) {
                        $res['SpnTypeMapList'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['SpnTypeMapList'][$n1++][$key2] = null !== $value2 ? $value2->toArray($noStream) : $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->spnTypeNameList) {
            if (\is_array($this->spnTypeNameList)) {
                $res['SpnTypeNameList'] = [];
                $n1 = 0;
                foreach ($this->spnTypeNameList as $item1) {
                    $res['SpnTypeNameList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FilterModules'])) {
            if (!empty($map['FilterModules'])) {
                $model->filterModules = [];
                $n1 = 0;
                foreach ($map['FilterModules'] as $item1) {
                    $model->filterModules[$n1++] = filterModules::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['ShowModules'] as $item1) {
                    $model->showModules[$n1++] = showModules::fromMap($item1);
                }
            }
        }

        if (isset($map['SpnTypeList'])) {
            if (!empty($map['SpnTypeList'])) {
                $model->spnTypeList = [];
                $n1 = 0;
                foreach ($map['SpnTypeList'] as $item1) {
                    $model->spnTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SpnTypeMapList'])) {
            if (!empty($map['SpnTypeMapList'])) {
                $model->spnTypeMapList = [];
                $n1 = 0;
                foreach ($map['SpnTypeMapList'] as $item1) {
                    if (!empty($item1)) {
                        $model->spnTypeMapList[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->spnTypeMapList[$n1++][$key2] = DataModuleMapListSpnTypeMapListValue::fromMap($value2);
                        }
                    }
                }
            }
        }

        if (isset($map['SpnTypeNameList'])) {
            if (!empty($map['SpnTypeNameList'])) {
                $model->spnTypeNameList = [];
                $n1 = 0;
                foreach ($map['SpnTypeNameList'] as $item1) {
                    $model->spnTypeNameList[$n1++] = spnTypeNameList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
