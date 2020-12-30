<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCapabilitiesResponseBody\capabilities;

use AlibabaCloud\Tea\Model;

class capability extends Model
{
    /**
     * @var string
     */
    public $capabilityId;

    /**
     * @var string
     */
    public $capabilityName;
    protected $_name = [
        'capabilityId'   => 'CapabilityId',
        'capabilityName' => 'CapabilityName',
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
        if (null !== $this->capabilityName) {
            $res['CapabilityName'] = $this->capabilityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapabilityId'])) {
            $model->capabilityId = $map['CapabilityId'];
        }
        if (isset($map['CapabilityName'])) {
            $model->capabilityName = $map['CapabilityName'];
        }

        return $model;
    }
}
