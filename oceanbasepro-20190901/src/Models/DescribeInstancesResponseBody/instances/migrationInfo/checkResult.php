<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstancesResponseBody\instances\migrationInfo;

use AlibabaCloud\Dara\Model;

class checkResult extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $subModule;

    /**
     * @var string
     */
    public $subModuleName;
    protected $_name = [
        'code' => 'Code',
        'codeName' => 'CodeName',
        'level' => 'Level',
        'module' => 'Module',
        'moduleName' => 'ModuleName',
        'subModule' => 'SubModule',
        'subModuleName' => 'SubModuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->subModule) {
            $res['SubModule'] = $this->subModule;
        }

        if (null !== $this->subModuleName) {
            $res['SubModuleName'] = $this->subModuleName;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['SubModule'])) {
            $model->subModule = $map['SubModule'];
        }

        if (isset($map['SubModuleName'])) {
            $model->subModuleName = $map['SubModuleName'];
        }

        return $model;
    }
}
