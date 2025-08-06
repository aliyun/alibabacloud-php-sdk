<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class dedicatedHostAttribute extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostClusterId;

    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $dedicatedHostName;
    protected $_name = [
        'dedicatedHostClusterId' => 'DedicatedHostClusterId',
        'dedicatedHostId' => 'DedicatedHostId',
        'dedicatedHostName' => 'DedicatedHostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostClusterId) {
            $res['DedicatedHostClusterId'] = $this->dedicatedHostClusterId;
        }

        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
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
        if (isset($map['DedicatedHostClusterId'])) {
            $model->dedicatedHostClusterId = $map['DedicatedHostClusterId'];
        }

        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }

        return $model;
    }
}
