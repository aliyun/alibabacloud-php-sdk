<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class AddImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $containerImageSpecShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @example V1.0
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description This parameter is required.
     *
     * @example app-image
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $VMImageSpecShrink;
    protected $_name = [
        'containerImageSpecShrink' => 'ContainerImageSpec',
        'description'              => 'Description',
        'imageVersion'             => 'ImageVersion',
        'name'                     => 'Name',
        'VMImageSpecShrink'        => 'VMImageSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerImageSpecShrink) {
            $res['ContainerImageSpec'] = $this->containerImageSpecShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->VMImageSpecShrink) {
            $res['VMImageSpec'] = $this->VMImageSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerImageSpec'])) {
            $model->containerImageSpecShrink = $map['ContainerImageSpec'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VMImageSpec'])) {
            $model->VMImageSpecShrink = $map['VMImageSpec'];
        }

        return $model;
    }
}
