<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageRequest\containerImageSpec;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\AddImageRequest\VMImageSpec;

class AddImageRequest extends Model
{
    /**
     * @var containerImageSpec
     */
    public $containerImageSpec;
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
     * @var VMImageSpec
     */
    public $VMImageSpec;
    protected $_name = [
        'containerImageSpec' => 'ContainerImageSpec',
        'description'        => 'Description',
        'imageType'          => 'ImageType',
        'imageVersion'       => 'ImageVersion',
        'name'               => 'Name',
        'VMImageSpec'        => 'VMImageSpec',
    ];

    public function validate()
    {
        if (null !== $this->containerImageSpec) {
            $this->containerImageSpec->validate();
        }
        if (null !== $this->VMImageSpec) {
            $this->VMImageSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerImageSpec) {
            $res['ContainerImageSpec'] = null !== $this->containerImageSpec ? $this->containerImageSpec->toArray($noStream) : $this->containerImageSpec;
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

        if (null !== $this->VMImageSpec) {
            $res['VMImageSpec'] = null !== $this->VMImageSpec ? $this->VMImageSpec->toArray($noStream) : $this->VMImageSpec;
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
            $model->containerImageSpec = containerImageSpec::fromMap($map['ContainerImageSpec']);
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
            $model->VMImageSpec = VMImageSpec::fromMap($map['VMImageSpec']);
        }

        return $model;
    }
}
