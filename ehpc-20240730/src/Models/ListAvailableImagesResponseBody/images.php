<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAvailableImagesResponseBody;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $bootMode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $OSNameEn;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'architecture' => 'Architecture',
        'bootMode' => 'BootMode',
        'description' => 'Description',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'OSName' => 'OSName',
        'OSNameEn' => 'OSNameEn',
        'platform' => 'Platform',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }

        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }

        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }

        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }

        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
