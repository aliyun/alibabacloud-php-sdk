<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoResponseBody\images;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @example 2017-12-08T12:10:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example https://user_defined_bucket.oss-cn-beijing.aliyuncs.com/m-xxxxxxxxx1.qcow2
     *
     * @var string
     */
    public $exportedImageURL;

    /**
     * @example Exported
     *
     * @var string
     */
    public $imageExportStatus;

    /**
     * @example m-xxxxxxxxx1
     *
     * @var string
     */
    public $imageId;

    /**
     * @example m-xxxxxxxxx1
     *
     * @var string
     */
    public $imageName;

    /**
     * @example system
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @example centos
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'architecture'      => 'Architecture',
        'creationTime'      => 'CreationTime',
        'exportedImageURL'  => 'ExportedImageURL',
        'imageExportStatus' => 'ImageExportStatus',
        'imageId'           => 'ImageId',
        'imageName'         => 'ImageName',
        'imageOwnerAlias'   => 'ImageOwnerAlias',
        'platform'          => 'Platform',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->exportedImageURL) {
            $res['ExportedImageURL'] = $this->exportedImageURL;
        }
        if (null !== $this->imageExportStatus) {
            $res['ImageExportStatus'] = $this->imageExportStatus;
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
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExportedImageURL'])) {
            $model->exportedImageURL = $map['ExportedImageURL'];
        }
        if (isset($map['ImageExportStatus'])) {
            $model->imageExportStatus = $map['ImageExportStatus'];
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
