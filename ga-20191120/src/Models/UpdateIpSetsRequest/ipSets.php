<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;

use AlibabaCloud\Tea\Model;

class ipSets extends Model
{
    /**
     * @description The new bandwidth of the acceleration region. Unit: Mbit/s.
     *
     * You can specify the bandwidth for up to 100 acceleration regions.
     * @example 4
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the acceleration region that you want to modify.
     *
     * You can specify the IDs of up to 100 acceleration regions.
     * @example ips-bp11c9mpphtb1xkds****
     *
     * @var string
     */
    public $ipSetId;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'ipSetId'   => 'IpSetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }

        return $model;
    }
}
