<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody;

use AlibabaCloud\Tea\Model;

class resolveResult extends Model
{
    /**
     * @var string
     */
    public $ipAddrs;

    /**
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
