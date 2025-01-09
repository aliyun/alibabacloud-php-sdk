<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class GetAuditLogStatusRequest extends Model
{
    /**
     * @description Specifies whether to obtain the list of OSS buckets that can be used to store audit logs. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $getOssBucket;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'getOssBucket' => 'GetOssBucket',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->getOssBucket) {
            $res['GetOssBucket'] = $this->getOssBucket;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditLogStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GetOssBucket'])) {
            $model->getOssBucket = $map['GetOssBucket'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
