<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRuleResponseBody\bindVpcs;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRuleResponseBody\forwardIps;
use AlibabaCloud\Tea\Model;

class DescribeResolverRuleResponseBody extends Model
{
    /**
     * @description The virtual private clouds (VPCs) that are associated with the forwarding rule.
     *
     * @var bindVpcs[]
     */
    public $bindVpcs;

    /**
     * @description The time when the forwarding rule was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-07-13 10:51:44
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the forwarding rule was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1594608704000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The endpoint ID.
     *
     * @example hra0**
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The endpoint name.
     *
     * @example endpoint-test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The destination IP addresses.
     *
     * @var forwardIps[]
     */
    public $forwardIps;

    /**
     * @description The forwarding rule ID.
     *
     * @example hra1**
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the forwarding rule.
     *
     * @example forward rule-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 13D5113B-7E34-407F-A9C1-D96CD2B04277
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the forwarding rule. Valid value:
     *
     *   OUTBOUND: forwards Domain Name System (DNS) requests to one or more external IP addresses.
     *
     * @example OUTBOUND
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the forwarding rule was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2020-07-13 10:51:44
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the forwarding rule was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1594608704000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The name of the forward zone.
     *
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
        'requestId'       => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeResolverRuleResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
