<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class imageModifiedRecords extends Model
{
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
    public $newImageId;

    /**
     * @var string
     */
    public $newImageName;

    /**
     * @var int
     */
    public $status;

    /**
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
