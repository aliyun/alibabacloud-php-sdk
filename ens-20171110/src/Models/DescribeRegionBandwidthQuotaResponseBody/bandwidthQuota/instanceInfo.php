<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionBandwidthQuotaResponseBody\bandwidthQuota;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @var int
     */
    public $instanceNumber;

    /**
     * @var string
     */
    public $instanceSpec;
    protected $_name = [
        'instanceNumber' => 'InstanceNumber',
        'instanceSpec'   => 'InstanceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        return $model;
    }
}
