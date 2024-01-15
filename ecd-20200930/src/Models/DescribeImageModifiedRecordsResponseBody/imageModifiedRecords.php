<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class imageModifiedRecords extends Model
{
    /**
     * @description The ID of the image before the change.
     *
     * @example m-8rnz2imrpcfuh****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the image before the change.
     *
     * @example win10-0307
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the new image.
     *
     * @example xxxNewImageID
     *
     * @var string
     */
    public $newImageId;

    /**
     * @description Add the image name.
     *
     * @example xxxxImageID
     *
     * @var string
     */
    public $newImageName;

    /**
     * @description The status of the workspace.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The last time when the disaster recovery plan was updated.
     *
     * @example 2022-03-03T02:43:44.851Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'imageId'      => 'ImageId',
        'imageName'    => 'ImageName',
        'newImageId'   => 'NewImageId',
        'newImageName' => 'NewImageName',
        'status'       => 'Status',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->newImageId) {
            $res['NewImageId'] = $this->newImageId;
        }
        if (null !== $this->newImageName) {
            $res['NewImageName'] = $this->newImageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageModifiedRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['NewImageId'])) {
            $model->newImageId = $map['NewImageId'];
        }
        if (isset($map['NewImageName'])) {
            $model->newImageName = $map['NewImageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
