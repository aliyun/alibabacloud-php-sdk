<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeServcieScheduleRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter does not take effect.
     *
     * @example android
     *
     * @var string
     */
    public $podConfigName;

    /**
     * @description The UUID of the device.
     *
     * @example hdm_f022bf160dc69e2d8eb421e508eb9170
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appId'         => 'AppId',
        'podConfigName' => 'PodConfigName',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->podConfigName) {
            $res['PodConfigName'] = $this->podConfigName;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServcieScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PodConfigName'])) {
            $model->podConfigName = $map['PodConfigName'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
