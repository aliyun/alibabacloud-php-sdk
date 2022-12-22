<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody;

use AlibabaCloud\Tea\Model;

class resolveResult extends Model
{
    /**
     * @description The IP address to which the domain name is resolved. Multiple IP addresses are separated by commas (,).
     *
     * @example 11.1.X.X,12.1.X.X
     *
     * @var string
     */
    public $ipAddrs;

    /**
     * @description The time when the domain name was resolved. The value of this parameter is a timestamp. Unit: seconds.
     *
     * @example 1579091739
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'ipAddrs'    => 'IpAddrs',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddrs) {
            $res['IpAddrs'] = $this->ipAddrs;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resolveResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddrs'])) {
            $model->ipAddrs = $map['IpAddrs'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
