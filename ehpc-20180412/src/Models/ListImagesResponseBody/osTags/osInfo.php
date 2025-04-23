<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;

use AlibabaCloud\Dara\Model;

class osInfo extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $imageId;

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
    public $osTag;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture' => 'Architecture',
        'baseOsTag' => 'BaseOsTag',
        'imageId' => 'ImageId',
        'OSName' => 'OSName',
        'OSNameEn' => 'OSNameEn',
        'osTag' => 'OsTag',
        'platform' => 'Platform',
        'version' => 'Version',
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

        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = $this->baseOsTag;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }

        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }

        if (null !== $this->osTag) {
            $res['OsTag'] = $this->osTag;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = $map['BaseOsTag'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }

        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }

        if (isset($map['OsTag'])) {
            $model->osTag = $map['OsTag'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
