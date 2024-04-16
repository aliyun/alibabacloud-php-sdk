<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class ListModulesByPageRequest extends Model
{
    /**
     * @var string
     */
    public $customParentId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $hasOwnerApp;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'customParentId' => 'CustomParentId',
        'description'    => 'Description',
        'hasOwnerApp'    => 'HasOwnerApp',
        'moduleId'       => 'ModuleId',
        'moduleName'     => 'ModuleName',
        'moduleType'     => 'ModuleType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'platform'       => 'Platform',
        'source'         => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customParentId) {
            $res['CustomParentId'] = $this->customParentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hasOwnerApp) {
            $res['HasOwnerApp'] = $this->hasOwnerApp;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModulesByPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomParentId'])) {
            $model->customParentId = $map['CustomParentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HasOwnerApp'])) {
            $model->hasOwnerApp = $map['HasOwnerApp'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
