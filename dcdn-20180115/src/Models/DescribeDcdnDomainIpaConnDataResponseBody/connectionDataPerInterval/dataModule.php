<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaConnDataResponseBody\connectionDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 189095
     *
     * @var int
     */
    public $connections;

    /**
     * @example example1.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2022-02-21T15:00:00+08:00
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'connections' => 'Connections',
        'domain'      => 'Domain',
        'timeStamp'   => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
