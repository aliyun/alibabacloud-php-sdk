<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpSetsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $ipSetIds;
    protected $_name = [
        'regionId' => 'RegionId',
        'ipSetIds' => 'IpSetIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipSetIds) {
            $res['IpSetIds'] = $this->ipSetIds;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpSetIds'])) {
            if (!empty($map['IpSetIds'])) {
                $model->ipSetIds = $map['IpSetIds'];
            }
        }

        return $model;
    }
}
