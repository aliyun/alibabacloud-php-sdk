<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppListRequest extends Model
{
    /**
     * @description The PIDs of the applications monitored by ARMS Application Monitoring.
     *
     * @var string[]
     */
    public $pids;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'pids'     => 'Pids',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pids) {
            $res['Pids'] = $this->pids;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pids'])) {
            if (!empty($map['Pids'])) {
                $model->pids = $map['Pids'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
