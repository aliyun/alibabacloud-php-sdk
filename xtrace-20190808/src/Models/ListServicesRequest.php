<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @description The type of the application. You can leave this parameter empty or set this parameter to `XTRACE`. We recommend that you leave this parameter empty.
     *
     *   If you leave this parameter empty, applications monitored by Managed Service for OpenTelemetry or Application Real-Time Monitoring Service (ARMS) can be queried.
     *   If you set this parameter to `XTRACE`, only applications monitored by Managed Service for OpenTelemetry can be queried.
     *
     * @example XTRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appType'  => 'AppType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
