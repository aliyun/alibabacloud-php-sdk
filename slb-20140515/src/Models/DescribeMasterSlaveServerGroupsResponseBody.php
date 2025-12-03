<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;

class DescribeMasterSlaveServerGroupsResponseBody extends Model
{
    /**
     * @var masterSlaveServerGroups
     */
    public $masterSlaveServerGroups;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'masterSlaveServerGroups' => 'MasterSlaveServerGroups',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->masterSlaveServerGroups) {
            $this->masterSlaveServerGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroups) {
            $res['MasterSlaveServerGroups'] = null !== $this->masterSlaveServerGroups ? $this->masterSlaveServerGroups->toArray($noStream) : $this->masterSlaveServerGroups;
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
        if (isset($map['MasterSlaveServerGroups'])) {
            $model->masterSlaveServerGroups = masterSlaveServerGroups::fromMap($map['MasterSlaveServerGroups']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
