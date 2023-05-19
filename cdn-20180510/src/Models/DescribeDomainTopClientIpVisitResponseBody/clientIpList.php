<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody;

use AlibabaCloud\Tea\Model;

class clientIpList extends Model
{
    /**
     * @description Queries client IP addresses that are ranked by the number of requests or the amount of network traffic within a specific time range for one or more accelerated domain names. You can query data collected within the last 90 days.
     *
     * @example 256
     *
     * @var int
     */
    public $acc;

    /**
     * @description The ID of the request.
     *
     * @example 1.1.xxx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The total amount of network traffic consumed. Unit: bytes.
     *
     * @example 2
     *
     * @var int
     */
    public $rank;

    /**
     * @example 1024
     *
     * @var int
     */
    public $traffic;
    protected $_name = [
        'acc'      => 'Acc',
        'clientIp' => 'ClientIp',
        'rank'     => 'Rank',
        'traffic'  => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clientIpList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
