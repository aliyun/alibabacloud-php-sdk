<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The configuration information of the data node.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the instance.
     *
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The time when the instance was last updated.
     *
     * @example ls-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag value of the cloud disk.
     *
     * @example ls-cn-n6w1o5jq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type. Currently, only Virtual Private Cloud (VPC) is supported.
     *
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @description The state of the instance. Valid values: Normal, Active, Inactive, and Invalid.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description Specifies whether to use disk encryption. Valid values:
     *
     *   true: Enables the concurrent query feature for queries other than aggregate queries.
     *   false: Disables the concurrent query feature for queries other than aggregate queries.
     *
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @description The time when the instance was created.
     *
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The version of the instance. Currently, only 6.7.0_with_X-Pack and 7.4.0_with_X-Pack are supported.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the instance. Valid values:
     *
     * @example 2018-07-18T10:10:04.484Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @description The tag key of the cloud disk.
     *
     * @example 6.7.0_with_X-Pack
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'tags'            => 'Tags',
        'createdAt'       => 'createdAt',
        'description'     => 'description',
        'instanceId'      => 'instanceId',
        'networkConfig'   => 'networkConfig',
        'nodeAmount'      => 'nodeAmount',
        'nodeSpec'        => 'nodeSpec',
        'paymentType'     => 'paymentType',
        'resourceGroupId' => 'resourceGroupId',
        'status'          => 'status',
        'updatedAt'       => 'updatedAt',
        'version'         => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
