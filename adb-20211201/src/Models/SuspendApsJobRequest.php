<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SuspendApsJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example aps-bj1xxxxxx
     *
     * @var string
     */
    public $apsJobId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'apsJobId' => 'ApsJobId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsJobId) {
            $res['ApsJobId'] = $this->apsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SuspendApsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsJobId'])) {
            $model->apsJobId = $map['ApsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
