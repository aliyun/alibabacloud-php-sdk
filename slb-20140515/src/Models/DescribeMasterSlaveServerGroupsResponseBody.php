<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeMasterSlaveServerGroupsResponseBody\masterSlaveServerGroups;
use AlibabaCloud\Tea\Model;

class DescribeMasterSlaveServerGroupsResponseBody extends Model
{
    /**
     * @description The list of backend servers in the primary/secondary server group.
     *
     * @var masterSlaveServerGroups
     */
    public $masterSlaveServerGroups;

    /**
     * @description The ID of the request.
     *
     * @example 9DEC9C28-AB05-4DDF-9A78-6B08EC9CE18C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'masterSlaveServerGroups' => 'MasterSlaveServerGroups',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterSlaveServerGroups) {
            $res['MasterSlaveServerGroups'] = null !== $this->masterSlaveServerGroups ? $this->masterSlaveServerGroups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MasterSlaveServerGroups'])) {
            $model->masterSlaveServerGroups = masterSlaveServerGroups::fromMap($map['MasterSlaveServerGroups']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
