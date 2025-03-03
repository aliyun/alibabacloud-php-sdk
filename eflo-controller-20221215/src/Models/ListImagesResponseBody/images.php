<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListImagesResponseBody;

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
    public $imageVersion;
    /**
     * @var int
     */
    public $nodeCount;
    /**
     * @var string
     */
    public $platform;
    /**
     * @var string
     */
    public $releaseFileMd5;
    /**
     * @var int
     */
    public $releaseFileSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
