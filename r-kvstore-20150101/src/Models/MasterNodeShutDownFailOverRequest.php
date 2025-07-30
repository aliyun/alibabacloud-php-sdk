<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class MasterNodeShutDownFailOverRequest extends Model
{
    /**
     * @description The resource category. Set the value to instance.
     *
     * @example instance
     *
     * @var string
     */
    public $category;

    /**
     * @description *   Specify: This mode allows you to specify a database node to use.
     *   Random: In this mode, a random database node is selected when no database node is specified.
     *
     * @example Random
     *
     * @var string
     */
    public $DBFaultMode;

    /**
     * @description The IDs of the database nodes.
     *
     * @example r-rdsdavinx01003-db-0,r-rdsdavinx01003-db-1
     *
     * @var string
     */
    public $DBNodes;

    /**
     * @description *   **Hard**: stimulates a hardware failure that cannot be recovered. In this case, a high-availability switchover is triggered.
     *   **Soft** (default): stimulates a hardware failure that can be recovered. In this case, the system first attempts to recover the faulty node. If the attempt fails, a high-availability switchover is triggered.
     *
     * Valid values:
     *
     *   Safe
     *   UnSafe
     *   Hard
     *   Soft
     *
     * @example Safe
     *
     * @var string
     */
    public $failMode;

    /**
     * @description The instance ID. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/473778.html) operation to query the instance ID.
     *
     * This parameter is required.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description *   Specify: This mode allows you to specify a proxy node to use.
     *   Random: In this mode, a random proxy node is selected when no proxy node is specified.
     *
     * @example Specify
     *
     * @var string
     */
    public $proxyFaultMode;

    /**
     * @description The IDs of the proxy nodes.
     *
     * @example 6981,6982
     *
     * @var string
     */
    public $proxyInstanceIds;
    protected $_name = [
        'category' => 'Category',
        'DBFaultMode' => 'DBFaultMode',
        'DBNodes' => 'DBNodes',
        'failMode' => 'FailMode',
        'instanceId' => 'InstanceId',
        'proxyFaultMode' => 'ProxyFaultMode',
        'proxyInstanceIds' => 'ProxyInstanceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->DBFaultMode) {
            $res['DBFaultMode'] = $this->DBFaultMode;
        }
        if (null !== $this->DBNodes) {
            $res['DBNodes'] = $this->DBNodes;
        }
        if (null !== $this->failMode) {
            $res['FailMode'] = $this->failMode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->proxyFaultMode) {
            $res['ProxyFaultMode'] = $this->proxyFaultMode;
        }
        if (null !== $this->proxyInstanceIds) {
            $res['ProxyInstanceIds'] = $this->proxyInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MasterNodeShutDownFailOverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DBFaultMode'])) {
            $model->DBFaultMode = $map['DBFaultMode'];
        }
        if (isset($map['DBNodes'])) {
            $model->DBNodes = $map['DBNodes'];
        }
        if (isset($map['FailMode'])) {
            $model->failMode = $map['FailMode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProxyFaultMode'])) {
            $model->proxyFaultMode = $map['ProxyFaultMode'];
        }
        if (isset($map['ProxyInstanceIds'])) {
            $model->proxyInstanceIds = $map['ProxyInstanceIds'];
        }

        return $model;
    }
}
