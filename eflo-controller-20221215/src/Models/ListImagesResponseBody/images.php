<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @description Architecture
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Description
     *
     * @example alibaba cloud linux 3 full for H800
     *
     * @var string
     */
    public $description;

    /**
     * @description Image ID
     *
     * @example i190951671671438639388
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image name
     *
     * @example CentOS_7.9_x86_64_FULL_20221110
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Image version
     *
     * @example 7.9
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description node count
     *
     * @example 20
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @description Platform
     *
     * @example ALinux3
     *
     * @var string
     */
    public $platform;

    /**
     * @description File MD5
     *
     * @example 40741292480fc6d778138adcf8c
     *
     * @var string
     */
    public $releaseFileMd5;

    /**
     * @description Image size
     *
     * @example 5.8G
     *
     * @var int
     */
    public $releaseFileSize;

    /**
     * @description image type
     *
     * @example Public
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'architecture'    => 'Architecture',
        'description'     => 'Description',
        'imageId'         => 'ImageId',
        'imageName'       => 'ImageName',
        'imageVersion'    => 'ImageVersion',
        'nodeCount'       => 'NodeCount',
        'platform'        => 'Platform',
        'releaseFileMd5'  => 'ReleaseFileMd5',
        'releaseFileSize' => 'ReleaseFileSize',
        'type'            => 'Type',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->releaseFileMd5) {
            $res['ReleaseFileMd5'] = $this->releaseFileMd5;
        }
        if (null !== $this->releaseFileSize) {
            $res['ReleaseFileSize'] = $this->releaseFileSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
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
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ReleaseFileMd5'])) {
            $model->releaseFileMd5 = $map['ReleaseFileMd5'];
        }
        if (isset($map['ReleaseFileSize'])) {
            $model->releaseFileSize = $map['ReleaseFileSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
