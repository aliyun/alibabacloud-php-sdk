<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class SetStorageRequest extends Model
{
    /**
     * @description The storage region of logs. By default, the region of the data management center is used and cannot be changed. cn-shanghai is used for the China data management center, and ap-southeast-1 is used for the Outside China data management center. To change the region, contact the technical support of threat analysis.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in the Chinese mainland or in the China (Hong Kong) region.
     *   ap-southeast-1: Your assets reside in regions outside the Chinese mainland, excluding the China (Hong Kong) region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The storage duration of logs. Default value: 180. Minimum value: 30. Maximum value: 3000. Unit: days.
     *
     * @example 180
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'region'   => 'Region',
        'regionId' => 'RegionId',
        'ttl'      => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
