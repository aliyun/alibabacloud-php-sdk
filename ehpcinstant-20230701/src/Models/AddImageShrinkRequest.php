<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $VMImageSpecShrink;
    protected $_name = [
        'containerImageSpecShrink' => 'ContainerImageSpec',
        'description' => 'Description',
        'imageType' => 'ImageType',
        'imageVersion' => 'ImageVersion',
        'name' => 'Name',
        'VMImageSpecShrink' => 'VMImageSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerImageSpecShrink) {
            $res['ContainerImageSpec'] = $this->containerImageSpecShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerImageSpec'])) {
            $model->containerImageSpecShrink = $map['ContainerImageSpec'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
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
