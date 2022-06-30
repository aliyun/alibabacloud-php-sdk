<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody;

use AlibabaCloud\Tea\Model;

class secRealServers extends Model
{
    /**
     * @var int
     */
    public $currentIndex;

    /**
     * @var string
     */
    public $eip;

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
     * @var string
     */
    public $realServer;
    protected $_name = [
        'currentIndex' => 'CurrentIndex',
        'eip'          => 'Eip',
        'frontendPort' => 'FrontendPort',
        'instanceId'   => 'InstanceId',
        'protocol'     => 'Protocol',
        'realServer'   => 'RealServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secRealServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }

        return $model;
    }
}
