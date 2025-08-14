<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDomainResolveResponseBody;

use AlibabaCloud\Dara\Model;

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
        'ipAddrs' => 'IpAddrs',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
