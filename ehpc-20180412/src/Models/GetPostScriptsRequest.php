<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetPostScriptsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * You can call the [ListClusters](~~87116~~) operation to obtain the cluster ID.
     * @example ehpc-sh-EnjshUxn
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the region where the cluster resides.
     *
     * You can call the [ListRegions](~~188593~~) operation to query the latest region list.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPostScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
