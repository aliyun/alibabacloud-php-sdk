<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody\healthCheckStatusList\realServerStatusList;
use AlibabaCloud\Tea\Model;

class healthCheckStatusList extends Model
{
    /**
     * @example 233
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @example ddoscoo-cn-XXXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @var realServerStatusList[]
     */
    public $realServerStatusList;

    /**
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'frontendPort'         => 'FrontendPort',
        'instanceId'           => 'InstanceId',
        'protocol'             => 'Protocol',
        'realServerStatusList' => 'RealServerStatusList',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServerStatusList) {
            $res['RealServerStatusList'] = [];
            if (null !== $this->realServerStatusList && \is_array($this->realServerStatusList)) {
                $n = 0;
                foreach ($this->realServerStatusList as $item) {
                    $res['RealServerStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthCheckStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServerStatusList'])) {
            if (!empty($map['RealServerStatusList'])) {
                $model->realServerStatusList = [];
                $n                           = 0;
                foreach ($map['RealServerStatusList'] as $item) {
                    $model->realServerStatusList[$n++] = null !== $item ? realServerStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
