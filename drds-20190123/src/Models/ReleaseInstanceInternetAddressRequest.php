<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ReleaseInstanceInternetAddressRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $drdsPassword;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId'       => 'RegionId',
        'drdsPassword'   => 'DrdsPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->drdsPassword) {
            $res['DrdsPassword'] = $this->drdsPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseInstanceInternetAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DrdsPassword'])) {
            $model->drdsPassword = $map['DrdsPassword'];
        }

        return $model;
    }
}
