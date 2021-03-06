<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;
use AlibabaCloud\Tea\Model;

class DescribeMasterSlaveServerGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var masterSlaveServerGroups
     */
    public $masterSlaveServerGroups;
    protected $_name = [
        'requestId'               => 'RequestId',
        'masterSlaveServerGroups' => 'MasterSlaveServerGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->masterSlaveServerGroups) {
            $res['MasterSlaveServerGroups'] = null !== $this->masterSlaveServerGroups ? $this->masterSlaveServerGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMasterSlaveServerGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MasterSlaveServerGroups'])) {
            $model->masterSlaveServerGroups = masterSlaveServerGroups::fromMap($map['MasterSlaveServerGroups']);
        }

        return $model;
    }
}
