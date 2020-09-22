<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DescribeImagesQuery extends Model
{
    /**
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $dockerVersion;

    /**
     * @var string
     */
    public $imageName;
    protected $_name = [
        'regionID'      => 'RegionID',
        'dockerVersion' => 'DockerVersion',
        'imageName'     => 'ImageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->dockerVersion) {
            $res['DockerVersion'] = $this->dockerVersion;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImagesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['DockerVersion'])) {
            $model->dockerVersion = $map['DockerVersion'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        return $model;
    }
}
