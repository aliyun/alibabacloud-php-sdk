<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;

use AlibabaCloud\Tea\Model;

class ossBucketList extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bucketName;
    protected $_name = [
        'regionId'   => 'RegionId',
        'bucketName' => 'BucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossBucketList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        return $model;
    }
}
