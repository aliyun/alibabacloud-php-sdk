<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponse;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponse\healthCheckStatusList\realServerStatusList;
use AlibabaCloud\Tea\Model;

class healthCheckStatusList extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var realServerStatusList[]
     */
    public $realServerStatusList;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'protocol'             => 'Protocol',
        'frontendPort'         => 'FrontendPort',
        'status'               => 'Status',
        'realServerStatusList' => 'RealServerStatusList',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('frontendPort', $this->frontendPort, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('realServerStatusList', $this->realServerStatusList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
