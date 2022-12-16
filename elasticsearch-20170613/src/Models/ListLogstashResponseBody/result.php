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
     * @var tags[]
     */
    public $tags;

    /**
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example ls-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @example ls-cn-n6w1o5jq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example 2018-07-18T10:10:04.484Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 6.7.0_with_X-Pack
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'tags'          => 'Tags',
        'createdAt'     => 'createdAt',
        'description'   => 'description',
        'instanceId'    => 'instanceId',
        'networkConfig' => 'networkConfig',
        'nodeAmount'    => 'nodeAmount',
        'nodeSpec'      => 'nodeSpec',
        'paymentType'   => 'paymentType',
        'status'        => 'status',
        'updatedAt'     => 'updatedAt',
        'version'       => 'version',
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
