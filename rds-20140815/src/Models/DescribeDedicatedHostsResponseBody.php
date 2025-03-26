<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts;

class DescribeDedicatedHostsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var dedicatedHosts
     */
    public $dedicatedHosts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHosts' => 'DedicatedHosts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedHosts) {
            $this->dedicatedHosts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = null !== $this->dedicatedHosts ? $this->dedicatedHosts->toArray($noStream) : $this->dedicatedHosts;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DedicatedHosts'])) {
            $model->dedicatedHosts = dedicatedHosts::fromMap($map['DedicatedHosts']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
