<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class CreateAnchorRequest extends Model
{
    /**
     * @var string
     */
    public $anchorCategory;

    /**
     * @var string
     */
    public $anchorMaterialName;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $digitalHumanType;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $useScene;

    /**
     * @var string
     */
    public $videoOssKey;
    protected $_name = [
        'anchorCategory' => 'anchorCategory',
        'anchorMaterialName' => 'anchorMaterialName',
        'coverUrl' => 'coverUrl',
        'digitalHumanType' => 'digitalHumanType',
        'gender' => 'gender',
        'useScene' => 'useScene',
        'videoOssKey' => 'videoOssKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorCategory) {
            $res['anchorCategory'] = $this->anchorCategory;
        }

        if (null !== $this->anchorMaterialName) {
            $res['anchorMaterialName'] = $this->anchorMaterialName;
        }

        if (null !== $this->coverUrl) {
            $res['coverUrl'] = $this->coverUrl;
        }

        if (null !== $this->digitalHumanType) {
            $res['digitalHumanType'] = $this->digitalHumanType;
        }

        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }

        if (null !== $this->useScene) {
            $res['useScene'] = $this->useScene;
        }

        if (null !== $this->videoOssKey) {
            $res['videoOssKey'] = $this->videoOssKey;
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
        if (isset($map['anchorCategory'])) {
            $model->anchorCategory = $map['anchorCategory'];
        }

        if (isset($map['anchorMaterialName'])) {
            $model->anchorMaterialName = $map['anchorMaterialName'];
        }

        if (isset($map['coverUrl'])) {
            $model->coverUrl = $map['coverUrl'];
        }

        if (isset($map['digitalHumanType'])) {
            $model->digitalHumanType = $map['digitalHumanType'];
        }

        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }

        if (isset($map['useScene'])) {
            $model->useScene = $map['useScene'];
        }

        if (isset($map['videoOssKey'])) {
            $model->videoOssKey = $map['videoOssKey'];
        }

        return $model;
    }
}
