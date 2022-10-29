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
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $ispType;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'bandwidth'          => 'Bandwidth',
        'ipVersion'          => 'IpVersion',
        'ispType'            => 'IspType',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ispType) {
            $res['IspType'] = $this->ispType;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IspType'])) {
            $model->ispType = $map['IspType'];
        }

        return $model;
    }
}
