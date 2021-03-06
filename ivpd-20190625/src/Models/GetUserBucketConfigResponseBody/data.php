<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\GetUserBucketConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'regionName' => 'RegionName',
        'region'     => 'Region',
        'bucket'     => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
