<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules\bindVpcs;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules\forwardIps;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var bindVpcs[]
     */
    public $bindVpcs;

    /**
     * @example 2020-07-13 10:51:44
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1594608704000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example hra0**
     *
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var forwardIps[]
     */
    public $forwardIps;

    /**
     * @example hra1**
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example OUTBOUND
     *
     * @var string
     */
    public $type;

    /**
     * @example 2020-07-13 10:51:44
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1594608704000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example example.com
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'bindVpcs'        => 'BindVpcs',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'endpointId'      => 'EndpointId',
        'endpointName'    => 'EndpointName',
        'forwardIps'      => 'ForwardIps',
        'id'              => 'Id',
        'name'            => 'Name',
        'type'            => 'Type',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'zoneName'        => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = [];
            if (null !== $this->bindVpcs && \is_array($this->bindVpcs)) {
                $n = 0;
                foreach ($this->bindVpcs as $item) {
                    $res['BindVpcs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->forwardIps) {
            $res['ForwardIps'] = [];
            if (null !== $this->forwardIps && \is_array($this->forwardIps)) {
                $n = 0;
                foreach ($this->forwardIps as $item) {
                    $res['ForwardIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVpcs'])) {
            if (!empty($map['BindVpcs'])) {
                $model->bindVpcs = [];
                $n               = 0;
                foreach ($map['BindVpcs'] as $item) {
                    $model->bindVpcs[$n++] = null !== $item ? bindVpcs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['ForwardIps'])) {
            if (!empty($map['ForwardIps'])) {
                $model->forwardIps = [];
                $n                 = 0;
                foreach ($map['ForwardIps'] as $item) {
                    $model->forwardIps[$n++] = null !== $item ? forwardIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
