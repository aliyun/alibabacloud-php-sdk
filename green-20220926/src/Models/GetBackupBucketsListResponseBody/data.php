<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetBackupBucketsListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example gj-bucket1
     *
     * @var string
     */
    public $bucket;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'bucket' => 'Bucket',
        'region' => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
