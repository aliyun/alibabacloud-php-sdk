<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class CreateNoTrainPicAvatarRequest extends Model
{
    /**
     * @var string
     */
    public $expressiveness;

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
    public $jwtToken;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $transparent;
    protected $_name = [
        'expressiveness' => 'expressiveness',
        'gender' => 'gender',
        'generateAssets' => 'generateAssets',
        'imageOssPath' => 'imageOssPath',
        'jwtToken' => 'jwtToken',
        'name' => 'name',
        'transparent' => 'transparent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressiveness) {
            $res['expressiveness'] = $this->expressiveness;
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

        if (null !== $this->jwtToken) {
            $res['jwtToken'] = $this->jwtToken;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['expressiveness'])) {
            $model->expressiveness = $map['expressiveness'];
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

        if (isset($map['jwtToken'])) {
            $model->jwtToken = $map['jwtToken'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['transparent'])) {
            $model->transparent = $map['transparent'];
        }

        return $model;
    }
}
