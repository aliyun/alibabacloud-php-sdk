<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\UpdateMcpServiceRequest;

use AlibabaCloud\Dara\Model;

class network extends Model
{
    /**
     * @var string
     */
    public $accessIp;

    /**
     * @var int
     */
    public $accessPort;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessIp' => 'accessIp',
        'accessPort' => 'accessPort',
        'gatewayId' => 'gatewayId',
        'mcpServerId' => 'mcpServerId',
        'mode' => 'mode',
        'region' => 'region',
        'securityGroupId' => 'securityGroupId',
        'vpcId' => 'vpcId',
        'vswId' => 'vswId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['accessIp'] = $this->accessIp;
        }

        if (null !== $this->accessPort) {
            $res['accessPort'] = $this->accessPort;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->securityGroupId) {
            $res['securityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vswId) {
            $res['vswId'] = $this->vswId;
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
        if (isset($map['accessIp'])) {
            $model->accessIp = $map['accessIp'];
        }

        if (isset($map['accessPort'])) {
            $model->accessPort = $map['accessPort'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['securityGroupId'])) {
            $model->securityGroupId = $map['securityGroupId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vswId'])) {
            $model->vswId = $map['vswId'];
        }

        return $model;
    }
}
