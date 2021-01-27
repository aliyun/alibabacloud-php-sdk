<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponseBody;

use AlibabaCloud\Tea\Model;

class ipSets extends Model
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
    public $ipSetId;

    /**
     * @var string[]
     */
    public $ipList;
    protected $_name = [
        'accelerateRegionId' => 'AccelerateRegionId',
        'bandwidth'          => 'Bandwidth',
        'ipSetId'            => 'IpSetId',
        'ipList'             => 'IpList',
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
        if (null !== $this->ipSetId) {
            $res['IpSetId'] = $this->ipSetId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['IpSetId'])) {
            $model->ipSetId = $map['IpSetId'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }

        return $model;
    }
}
