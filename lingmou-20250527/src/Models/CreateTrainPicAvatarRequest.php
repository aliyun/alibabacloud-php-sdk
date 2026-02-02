<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CreateTrainPicAvatarRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var bool
     */
    public $generateAssets;

    /**
     * @var string
     */
    public $imageOssPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var bool
     */
    public $transparent;
    protected $_name = [
        'bizType' => 'bizType',
        'gender' => 'gender',
        'generateAssets' => 'generateAssets',
        'imageOssPath' => 'imageOssPath',
        'name' => 'name',
        'templateId' => 'templateId',
        'transparent' => 'transparent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->generateAssets) {
            $res['generateAssets'] = $this->generateAssets;
        }

        if (null !== $this->imageOssPath) {
            $res['imageOssPath'] = $this->imageOssPath;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->transparent) {
            $res['transparent'] = $this->transparent;
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
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['generateAssets'])) {
            $model->generateAssets = $map['generateAssets'];
        }

        if (isset($map['imageOssPath'])) {
            $model->imageOssPath = $map['imageOssPath'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['transparent'])) {
            $model->transparent = $map['transparent'];
        }

        return $model;
    }
}
