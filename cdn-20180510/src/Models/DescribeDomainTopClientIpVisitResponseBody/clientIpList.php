<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody;

use AlibabaCloud\Tea\Model;

class clientIpList extends Model
{
    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $acc;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'rank'     => 'Rank',
        'clientIp' => 'ClientIp',
        'acc'      => 'Acc',
        'traffic'  => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->acc) {
            $res['Acc'] = $this->acc;
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
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Acc'])) {
            $model->acc = $map['Acc'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
