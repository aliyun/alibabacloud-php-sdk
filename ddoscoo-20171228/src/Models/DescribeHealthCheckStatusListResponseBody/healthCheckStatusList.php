<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeHealthCheckStatusListResponseBody\healthCheckStatusList\realServerStatusList;

class healthCheckStatusList extends Model
{
    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var realServerStatusList[]
     */
    public $realServerStatusList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'instanceId' => 'InstanceId',
        'protocol' => 'Protocol',
        'realServerStatusList' => 'RealServerStatusList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->realServerStatusList)) {
            Model::validateArray($this->realServerStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->realServerStatusList)) {
                $res['RealServerStatusList'] = [];
                $n1 = 0;
                foreach ($this->realServerStatusList as $item1) {
                    $res['RealServerStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n1 = 0;
                foreach ($map['RealServerStatusList'] as $item1) {
                    $model->realServerStatusList[$n1++] = realServerStatusList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
