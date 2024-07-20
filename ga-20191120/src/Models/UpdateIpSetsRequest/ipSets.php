<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateIpSetsRequest;

use AlibabaCloud\Tea\Model;

class ipSets extends Model
{
    /**
     * @description The new bandwidth that you want to allocate to the acceleration regions. Unit: Mbit/s.
     *
     * This parameter is required.
     * @example 4
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The IDs of the acceleration regions that you want to modify.
     *
     * This parameter is required.
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
