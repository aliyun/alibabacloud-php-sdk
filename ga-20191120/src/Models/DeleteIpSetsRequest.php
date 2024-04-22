<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpSetsRequest extends Model
{
    /**
     * @description The IDs of the acceleration regions that you want to delete.
     *
     * @example ips-bp11c9mpphtb1xkds****
     *
     * @var string[]
     */
    public $ipSetIds;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ipSetIds' => 'IpSetIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipSetIds) {
            $res['IpSetIds'] = $this->ipSetIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIpSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpSetIds'])) {
            if (!empty($map['IpSetIds'])) {
                $model->ipSetIds = $map['IpSetIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
