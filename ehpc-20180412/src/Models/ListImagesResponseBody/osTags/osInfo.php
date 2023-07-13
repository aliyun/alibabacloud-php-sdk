<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListImagesResponseBody\osTags;

use AlibabaCloud\Tea\Model;

class osInfo extends Model
{
    /**
     * @description The architecture of the operating system. Valid values:
     *
     *   i386
     *   x86\_64
     *
     * @example i386
     *
     * @var string
     */
    public $architecture;

    /**
     * @description The image tag of the operating system. The tag is used only for management nodes.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $baseOsTag;

    /**
     * @description The ID of the image.
     *
     * @example m-bp1h8aoe73p71iow****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The name of the image in English.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The tag that is added to the image.
     *
     * @example CentOS_7.2_64
     *
     * @var string
     */
    public $osTag;

    /**
     * @description The operating system. Valid values:
     *
     *   CentOS
     *   windows
     *
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @description The version of the operating system.
     *
     * @example 7.2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'architecture' => 'Architecture',
        'baseOsTag'    => 'BaseOsTag',
        'imageId'      => 'ImageId',
        'OSName'       => 'OSName',
        'OSNameEn'     => 'OSNameEn',
        'osTag'        => 'OsTag',
        'platform'     => 'Platform',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return osInfo
     */
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
