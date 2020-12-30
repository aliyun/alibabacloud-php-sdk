<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventSourceIpsResponseBody\data;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $inBps;

    /**
     * @var string
     */
    public $city;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'inBps'    => 'InBps',
        'city'     => 'City',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        return $model;
    }
}
