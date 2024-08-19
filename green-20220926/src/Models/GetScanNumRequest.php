<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetScanNumRequest extends Model
{
    /**
     * @example tmpsample
     *
     * @var string
     */
    public $buckets;

    /**
     * @example image
     *
     * @var int
     */
    public $mediaType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'buckets'   => 'Buckets',
        'mediaType' => 'MediaType',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetScanNumRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
