<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaResponseBody\resultContent;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppEnhanceProcessInMsaResponseBody\resultContent\data\enhanceMapping;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $afterMd5;

    /**
     * @var int
     */
    public $afterSize;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appPackage;

    /**
     * @var string[]
     */
    public $assetsFileList;

    /**
     * @var string
     */
    public $beforeMd5;

    /**
     * @var int
     */
    public $beforeSize;

    /**
     * @var string[]
     */
    public $classForest;

    /**
     * @var enhanceMapping[]
     */
    public $enhanceMapping;

    /**
     * @var string[]
     */
    public $enhanceRules;

    /**
     * @var string[]
     */
    public $enhancedAssetsFiles;

    /**
     * @var string[]
     */
    public $enhancedClasses;

    /**
     * @var string[]
     */
    public $enhancedSoFiles;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string[]
     */
    public $soFileList;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'afterMd5'            => 'AfterMd5',
        'afterSize'           => 'AfterSize',
        'appCode'             => 'AppCode',
        'appPackage'          => 'AppPackage',
        'assetsFileList'      => 'AssetsFileList',
        'beforeMd5'           => 'BeforeMd5',
        'beforeSize'          => 'BeforeSize',
        'classForest'         => 'ClassForest',
        'enhanceMapping'      => 'EnhanceMapping',
        'enhanceRules'        => 'EnhanceRules',
        'enhancedAssetsFiles' => 'EnhancedAssetsFiles',
        'enhancedClasses'     => 'EnhancedClasses',
        'enhancedSoFiles'     => 'EnhancedSoFiles',
        'id'                  => 'Id',
        'label'               => 'Label',
        'progress'            => 'Progress',
        'soFileList'          => 'SoFileList',
        'status'              => 'Status',
        'taskType'            => 'TaskType',
        'versionCode'         => 'VersionCode',
        'versionName'         => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterMd5) {
            $res['AfterMd5'] = $this->afterMd5;
        }
        if (null !== $this->afterSize) {
            $res['AfterSize'] = $this->afterSize;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appPackage) {
            $res['AppPackage'] = $this->appPackage;
        }
        if (null !== $this->assetsFileList) {
            $res['AssetsFileList'] = $this->assetsFileList;
        }
        if (null !== $this->beforeMd5) {
            $res['BeforeMd5'] = $this->beforeMd5;
        }
        if (null !== $this->beforeSize) {
            $res['BeforeSize'] = $this->beforeSize;
        }
        if (null !== $this->classForest) {
            $res['ClassForest'] = $this->classForest;
        }
        if (null !== $this->enhanceMapping) {
            $res['EnhanceMapping'] = [];
            if (null !== $this->enhanceMapping && \is_array($this->enhanceMapping)) {
                $n = 0;
                foreach ($this->enhanceMapping as $item) {
                    $res['EnhanceMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enhanceRules) {
            $res['EnhanceRules'] = $this->enhanceRules;
        }
        if (null !== $this->enhancedAssetsFiles) {
            $res['EnhancedAssetsFiles'] = $this->enhancedAssetsFiles;
        }
        if (null !== $this->enhancedClasses) {
            $res['EnhancedClasses'] = $this->enhancedClasses;
        }
        if (null !== $this->enhancedSoFiles) {
            $res['EnhancedSoFiles'] = $this->enhancedSoFiles;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->soFileList) {
            $res['SoFileList'] = $this->soFileList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['AfterMd5'])) {
            $model->afterMd5 = $map['AfterMd5'];
        }
        if (isset($map['AfterSize'])) {
            $model->afterSize = $map['AfterSize'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppPackage'])) {
            $model->appPackage = $map['AppPackage'];
        }
        if (isset($map['AssetsFileList'])) {
            if (!empty($map['AssetsFileList'])) {
                $model->assetsFileList = $map['AssetsFileList'];
            }
        }
        if (isset($map['BeforeMd5'])) {
            $model->beforeMd5 = $map['BeforeMd5'];
        }
        if (isset($map['BeforeSize'])) {
            $model->beforeSize = $map['BeforeSize'];
        }
        if (isset($map['ClassForest'])) {
            if (!empty($map['ClassForest'])) {
                $model->classForest = $map['ClassForest'];
            }
        }
        if (isset($map['EnhanceMapping'])) {
            if (!empty($map['EnhanceMapping'])) {
                $model->enhanceMapping = [];
                $n                     = 0;
                foreach ($map['EnhanceMapping'] as $item) {
                    $model->enhanceMapping[$n++] = null !== $item ? enhanceMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnhanceRules'])) {
            if (!empty($map['EnhanceRules'])) {
                $model->enhanceRules = $map['EnhanceRules'];
            }
        }
        if (isset($map['EnhancedAssetsFiles'])) {
            if (!empty($map['EnhancedAssetsFiles'])) {
                $model->enhancedAssetsFiles = $map['EnhancedAssetsFiles'];
            }
        }
        if (isset($map['EnhancedClasses'])) {
            if (!empty($map['EnhancedClasses'])) {
                $model->enhancedClasses = $map['EnhancedClasses'];
            }
        }
        if (isset($map['EnhancedSoFiles'])) {
            if (!empty($map['EnhancedSoFiles'])) {
                $model->enhancedSoFiles = $map['EnhancedSoFiles'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SoFileList'])) {
            if (!empty($map['SoFileList'])) {
                $model->soFileList = $map['SoFileList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
