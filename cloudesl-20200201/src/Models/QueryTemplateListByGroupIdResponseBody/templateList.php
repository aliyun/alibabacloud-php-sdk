<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\QueryTemplateListByGroupIdResponseBody;

use AlibabaCloud\Tea\Model;

class templateList extends Model
{
    /**
     * @var string
     */
    public $basePicture;

    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $eslSize;

    /**
     * @var string
     */
    public $eslType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $layout;

    /**
     * @var bool
     */
    public $relation;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateSceneId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'basePicture'     => 'BasePicture',
        'brand'           => 'Brand',
        'eslSize'         => 'EslSize',
        'eslType'         => 'EslType',
        'groupId'         => 'GroupId',
        'height'          => 'Height',
        'layout'          => 'Layout',
        'relation'        => 'Relation',
        'scene'           => 'Scene',
        'templateId'      => 'TemplateId',
        'templateName'    => 'TemplateName',
        'templateSceneId' => 'TemplateSceneId',
        'templateVersion' => 'TemplateVersion',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basePicture) {
            $res['BasePicture'] = $this->basePicture;
        }
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }
        if (null !== $this->eslSize) {
            $res['EslSize'] = $this->eslSize;
        }
        if (null !== $this->eslType) {
            $res['EslType'] = $this->eslType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->layout) {
            $res['Layout'] = $this->layout;
        }
        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateSceneId) {
            $res['TemplateSceneId'] = $this->templateSceneId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasePicture'])) {
            $model->basePicture = $map['BasePicture'];
        }
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }
        if (isset($map['EslSize'])) {
            $model->eslSize = $map['EslSize'];
        }
        if (isset($map['EslType'])) {
            $model->eslType = $map['EslType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Layout'])) {
            $model->layout = $map['Layout'];
        }
        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateSceneId'])) {
            $model->templateSceneId = $map['TemplateSceneId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
