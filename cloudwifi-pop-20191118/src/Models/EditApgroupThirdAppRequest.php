<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class EditApgroupThirdAppRequest extends Model
{
    /**
     * @var int
     */
    public $apgroupId;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appData;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $applyToSubGroup;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $inheritParentGroup;

    /**
     * @var string
     */
    public $thirdAppName;
    protected $_name = [
        'apgroupId' => 'ApgroupId',
        'appCode' => 'AppCode',
        'appData' => 'AppData',
        'appName' => 'AppName',
        'applyToSubGroup' => 'ApplyToSubGroup',
        'category' => 'Category',
        'configType' => 'ConfigType',
        'id' => 'Id',
        'inheritParentGroup' => 'InheritParentGroup',
        'thirdAppName' => 'ThirdAppName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apgroupId) {
            $res['ApgroupId'] = $this->apgroupId;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appData) {
            $res['AppData'] = $this->appData;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->applyToSubGroup) {
            $res['ApplyToSubGroup'] = $this->applyToSubGroup;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inheritParentGroup) {
            $res['InheritParentGroup'] = $this->inheritParentGroup;
        }

        if (null !== $this->thirdAppName) {
            $res['ThirdAppName'] = $this->thirdAppName;
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
        if (isset($map['ApgroupId'])) {
            $model->apgroupId = $map['ApgroupId'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppData'])) {
            $model->appData = $map['AppData'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ApplyToSubGroup'])) {
            $model->applyToSubGroup = $map['ApplyToSubGroup'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InheritParentGroup'])) {
            $model->inheritParentGroup = $map['InheritParentGroup'];
        }

        if (isset($map['ThirdAppName'])) {
            $model->thirdAppName = $map['ThirdAppName'];
        }

        return $model;
    }
}
