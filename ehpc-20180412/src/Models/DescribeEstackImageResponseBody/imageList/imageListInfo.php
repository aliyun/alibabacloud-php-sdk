<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeEstackImageResponseBody\imageList;

use AlibabaCloud\Tea\Model;

class imageListInfo extends Model
{
    /**
     * @var string
     */
    public $imageName;

    /**
     * @var int
     */
    public $imageSize;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $recentUpdateTime;
    protected $_name = [
        'imageName'        => 'ImageName',
        'imageSize'        => 'ImageSize',
        'imageType'        => 'ImageType',
        'imageUrl'         => 'ImageUrl',
        'recentUpdateTime' => 'RecentUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageSize) {
            $res['ImageSize'] = $this->imageSize;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->recentUpdateTime) {
            $res['RecentUpdateTime'] = $this->recentUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageListInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageSize'])) {
            $model->imageSize = $map['ImageSize'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RecentUpdateTime'])) {
            $model->recentUpdateTime = $map['RecentUpdateTime'];
        }

        return $model;
    }
}
