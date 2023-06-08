<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody;

use AlibabaCloud\Tea\Model;

class clientIpList extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 256
     *
     * @var int
     */
    public $acc;

    /**
     * @description The client IP address returned. Only IPv4 addressed are supported.
     *
     * @example 1.1.xxx
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The ranking of the client IP address returned.
     *
     * @example 2
     *
     * @var int
     */
    public $rank;

    /**
     * @description The total amount of network traffic consumed. Unit: bytes.
     *
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
