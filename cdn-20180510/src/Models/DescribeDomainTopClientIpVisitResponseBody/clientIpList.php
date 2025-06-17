<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopClientIpVisitResponseBody;

use AlibabaCloud\Dara\Model;

class clientIpList extends Model
{
    /**
     * @var int
     */
    public $acc;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'acc' => 'Acc',
        'clientIp' => 'ClientIp',
        'rank' => 'Rank',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
