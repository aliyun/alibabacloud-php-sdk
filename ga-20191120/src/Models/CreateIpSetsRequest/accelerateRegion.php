<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsRequest;

use AlibabaCloud\Tea\Model;

class accelerateRegion extends Model
{
    /**
     * @var string
     */
    public $accelerateRegionId;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $bandwidth;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'ipVersion'          => 'IpVersion',
        'bandwidth'          => 'Bandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateRegionId) {
            $res['AccelerateRegionId'] = $this->accelerateRegionId;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        return $model;
    }
}
