<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCommodityConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class commodityModules extends Model
{
    /**
     * @var string
     */
    public $lxModuleCode;

    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var string
     */
    public $moduleDescription;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleTip;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var string
     */
    public $moduleUrl;

    /**
     * @var string
     */
    public $moduleValue;

    /**
     * @example 0
     *
     * @var int
     */
    public $sortNumber;
    protected $_name = [
        'lxModuleCode'      => 'LxModuleCode',
        'moduleCode'        => 'ModuleCode',
        'moduleDescription' => 'ModuleDescription',
        'moduleName'        => 'ModuleName',
        'moduleTip'         => 'ModuleTip',
        'moduleType'        => 'ModuleType',
        'moduleUrl'         => 'ModuleUrl',
        'moduleValue'       => 'ModuleValue',
        'sortNumber'        => 'SortNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lxModuleCode) {
            $res['LxModuleCode'] = $this->lxModuleCode;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleDescription) {
            $res['ModuleDescription'] = $this->moduleDescription;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleTip) {
            $res['ModuleTip'] = $this->moduleTip;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->moduleUrl) {
            $res['ModuleUrl'] = $this->moduleUrl;
        }
        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = $this->moduleValue;
        }
        if (null !== $this->sortNumber) {
            $res['SortNumber'] = $this->sortNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityModules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LxModuleCode'])) {
            $model->lxModuleCode = $map['LxModuleCode'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleDescription'])) {
            $model->moduleDescription = $map['ModuleDescription'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleTip'])) {
            $model->moduleTip = $map['ModuleTip'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['ModuleUrl'])) {
            $model->moduleUrl = $map['ModuleUrl'];
        }
        if (isset($map['ModuleValue'])) {
            $model->moduleValue = $map['ModuleValue'];
        }
        if (isset($map['SortNumber'])) {
            $model->sortNumber = $map['SortNumber'];
        }

        return $model;
    }
}
