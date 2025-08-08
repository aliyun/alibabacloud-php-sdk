<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaResponseBody\resultContent\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\GetUserAppUploadProcessInMsaResponseBody\resultContent\data\apkInfo\enhanceMapping;

class apkInfo extends Model
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
     * @var string
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
        'afterMd5' => 'AfterMd5',
        'afterSize' => 'AfterSize',
        'appCode' => 'AppCode',
        'appPackage' => 'AppPackage',
        'assetsFileList' => 'AssetsFileList',
        'beforeMd5' => 'BeforeMd5',
        'beforeSize' => 'BeforeSize',
        'classForest' => 'ClassForest',
        'enhanceMapping' => 'EnhanceMapping',
        'enhanceRules' => 'EnhanceRules',
        'enhancedAssetsFiles' => 'EnhancedAssetsFiles',
        'enhancedClasses' => 'EnhancedClasses',
        'enhancedSoFiles' => 'EnhancedSoFiles',
        'id' => 'Id',
        'label' => 'Label',
        'progress' => 'Progress',
        'soFileList' => 'SoFileList',
        'status' => 'Status',
        'taskType' => 'TaskType',
        'versionCode' => 'VersionCode',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->assetsFileList)) {
            Model::validateArray($this->assetsFileList);
        }
        if (\is_array($this->enhanceMapping)) {
            Model::validateArray($this->enhanceMapping);
        }
        if (\is_array($this->enhanceRules)) {
            Model::validateArray($this->enhanceRules);
        }
        if (\is_array($this->enhancedAssetsFiles)) {
            Model::validateArray($this->enhancedAssetsFiles);
        }
        if (\is_array($this->enhancedClasses)) {
            Model::validateArray($this->enhancedClasses);
        }
        if (\is_array($this->enhancedSoFiles)) {
            Model::validateArray($this->enhancedSoFiles);
        }
        if (\is_array($this->soFileList)) {
            Model::validateArray($this->soFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->assetsFileList)) {
                $res['AssetsFileList'] = [];
                $n1 = 0;
                foreach ($this->assetsFileList as $item1) {
                    $res['AssetsFileList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->enhanceMapping)) {
                $res['EnhanceMapping'] = [];
                $n1 = 0;
                foreach ($this->enhanceMapping as $item1) {
                    $res['EnhanceMapping'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enhanceRules) {
            if (\is_array($this->enhanceRules)) {
                $res['EnhanceRules'] = [];
                $n1 = 0;
                foreach ($this->enhanceRules as $item1) {
                    $res['EnhanceRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enhancedAssetsFiles) {
            if (\is_array($this->enhancedAssetsFiles)) {
                $res['EnhancedAssetsFiles'] = [];
                $n1 = 0;
                foreach ($this->enhancedAssetsFiles as $item1) {
                    $res['EnhancedAssetsFiles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enhancedClasses) {
            if (\is_array($this->enhancedClasses)) {
                $res['EnhancedClasses'] = [];
                $n1 = 0;
                foreach ($this->enhancedClasses as $item1) {
                    $res['EnhancedClasses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enhancedSoFiles) {
            if (\is_array($this->enhancedSoFiles)) {
                $res['EnhancedSoFiles'] = [];
                $n1 = 0;
                foreach ($this->enhancedSoFiles as $item1) {
                    $res['EnhancedSoFiles'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->soFileList)) {
                $res['SoFileList'] = [];
                $n1 = 0;
                foreach ($this->soFileList as $item1) {
                    $res['SoFileList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->assetsFileList = [];
                $n1 = 0;
                foreach ($map['AssetsFileList'] as $item1) {
                    $model->assetsFileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BeforeMd5'])) {
            $model->beforeMd5 = $map['BeforeMd5'];
        }

        if (isset($map['BeforeSize'])) {
            $model->beforeSize = $map['BeforeSize'];
        }

        if (isset($map['ClassForest'])) {
            $model->classForest = $map['ClassForest'];
        }

        if (isset($map['EnhanceMapping'])) {
            if (!empty($map['EnhanceMapping'])) {
                $model->enhanceMapping = [];
                $n1 = 0;
                foreach ($map['EnhanceMapping'] as $item1) {
                    $model->enhanceMapping[$n1] = enhanceMapping::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnhanceRules'])) {
            if (!empty($map['EnhanceRules'])) {
                $model->enhanceRules = [];
                $n1 = 0;
                foreach ($map['EnhanceRules'] as $item1) {
                    $model->enhanceRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnhancedAssetsFiles'])) {
            if (!empty($map['EnhancedAssetsFiles'])) {
                $model->enhancedAssetsFiles = [];
                $n1 = 0;
                foreach ($map['EnhancedAssetsFiles'] as $item1) {
                    $model->enhancedAssetsFiles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnhancedClasses'])) {
            if (!empty($map['EnhancedClasses'])) {
                $model->enhancedClasses = [];
                $n1 = 0;
                foreach ($map['EnhancedClasses'] as $item1) {
                    $model->enhancedClasses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnhancedSoFiles'])) {
            if (!empty($map['EnhancedSoFiles'])) {
                $model->enhancedSoFiles = [];
                $n1 = 0;
                foreach ($map['EnhancedSoFiles'] as $item1) {
                    $model->enhancedSoFiles[$n1] = $item1;
                    ++$n1;
                }
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
                $model->soFileList = [];
                $n1 = 0;
                foreach ($map['SoFileList'] as $item1) {
                    $model->soFileList[$n1] = $item1;
                    ++$n1;
                }
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
