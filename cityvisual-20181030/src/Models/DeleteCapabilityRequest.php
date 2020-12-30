<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class DeleteCapabilityRequest extends Model
{
    /**
     * @var string
     */
    public $capabilityId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'capabilityId' => 'CapabilityId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilityId) {
            $res['CapabilityId'] = $this->capabilityId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCapabilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapabilityId'])) {
            $model->capabilityId = $map['CapabilityId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
