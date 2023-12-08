<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOssBucketScanStatisticRequest extends Model
{
    /**
     * @description The names of the buckets.
     *
     * @var string[]
     */
    public $bucketNameList;
    protected $_name = [
        'bucketNameList' => 'BucketNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketNameList) {
            $res['BucketNameList'] = $this->bucketNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssBucketScanStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = $map['BucketNameList'];
            }
        }

        return $model;
    }
}
