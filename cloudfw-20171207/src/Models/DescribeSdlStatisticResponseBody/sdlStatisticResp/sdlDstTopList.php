<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlStatisticResponseBody\sdlStatisticResp;

use AlibabaCloud\Dara\Model;

class sdlDstTopList extends Model
{
    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var int
     */
    public $trafficBytes;
    protected $_name = [
        'publicIp' => 'PublicIp',
        'trafficBytes' => 'TrafficBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->trafficBytes) {
            $res['TrafficBytes'] = $this->trafficBytes;
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
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['TrafficBytes'])) {
            $model->trafficBytes = $map['TrafficBytes'];
        }

        return $model;
    }
}
