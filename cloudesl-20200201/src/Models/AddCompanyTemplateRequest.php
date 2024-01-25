<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class AddCompanyTemplateRequest extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example 800X480
     *
     * @var string
     */
    public $eslSize;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 9
     *
     * @var string
     */
    public $groupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifDefault;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifMember;

    /**
     * @var bool
     */
    public $ifOutOfInventory;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifPromotion;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifSourceCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $layout;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateSceneId;

    /**
     * @example normal
     *
     * @var string
     */
    public $templateType;

    /**
     * @example 1.1.0
     *
     * @var string
     */
    public $templateVersion;

    /**
     * @example ali
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceType'       => 'DeviceType',
        'eslSize'          => 'EslSize',
        'extraParams'      => 'ExtraParams',
        'groupId'          => 'GroupId',
        'ifDefault'        => 'IfDefault',
        'ifMember'         => 'IfMember',
        'ifOutOfInventory' => 'IfOutOfInventory',
        'ifPromotion'      => 'IfPromotion',
        'ifSourceCode'     => 'IfSourceCode',
        'layout'           => 'Layout',
        'scene'            => 'Scene',
        'templateName'     => 'TemplateName',
        'templateSceneId'  => 'TemplateSceneId',
        'templateType'     => 'TemplateType',
        'templateVersion'  => 'TemplateVersion',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->eslSize) {
            $res['EslSize'] = $this->eslSize;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ifDefault) {
            $res['IfDefault'] = $this->ifDefault;
        }
        if (null !== $this->ifMember) {
            $res['IfMember'] = $this->ifMember;
        }
        if (null !== $this->ifOutOfInventory) {
            $res['IfOutOfInventory'] = $this->ifOutOfInventory;
        }
        if (null !== $this->ifPromotion) {
            $res['IfPromotion'] = $this->ifPromotion;
        }
        if (null !== $this->ifSourceCode) {
            $res['IfSourceCode'] = $this->ifSourceCode;
        }
        if (null !== $this->layout) {
            $res['Layout'] = $this->layout;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateSceneId) {
            $res['TemplateSceneId'] = $this->templateSceneId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCompanyTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['EslSize'])) {
            $model->eslSize = $map['EslSize'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IfDefault'])) {
            $model->ifDefault = $map['IfDefault'];
        }
        if (isset($map['IfMember'])) {
            $model->ifMember = $map['IfMember'];
        }
        if (isset($map['IfOutOfInventory'])) {
            $model->ifOutOfInventory = $map['IfOutOfInventory'];
        }
        if (isset($map['IfPromotion'])) {
            $model->ifPromotion = $map['IfPromotion'];
        }
        if (isset($map['IfSourceCode'])) {
            $model->ifSourceCode = $map['IfSourceCode'];
        }
        if (isset($map['Layout'])) {
            $model->layout = $map['Layout'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateSceneId'])) {
            $model->templateSceneId = $map['TemplateSceneId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
