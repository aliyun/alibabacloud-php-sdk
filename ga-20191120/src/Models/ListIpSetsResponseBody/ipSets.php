<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListIpSetsResponseBody;

use AlibabaCloud\Tea\Model;

class ipSets extends Model
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

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $ipSetId;

    /**
     * @var string[]
     */
    public $ipAddressList;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'ipVersion'          => 'IpVersion',
        'bandwidth'          => 'Bandwidth',
        'state'              => 'State',
        'ipSetId'            => 'IpSetId',
        'ipAddressList'      => 'IpAddressList',
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
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->ipAddressList) {
            $res['IpAddressList'] = $this->ipAddressList;
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
        if (isset($map['AccelerateRegionId'])) {
            $model->accelerateRegionId = $map['AccelerateRegionId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['IpAddressList'])) {
            if (!empty($map['IpAddressList'])) {
                $model->ipAddressList = $map['IpAddressList'];
            }
        }

        return $model;
    }
}
