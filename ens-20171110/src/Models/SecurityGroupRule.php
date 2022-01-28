<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SecurityGroupRule extends Model
{
    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 目标网段
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description 方向
     *
     * @var string
     */
    public $direction;

    /**
     * @description 协议
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description 授权策略
     *
     * @var string
     */
    public $policy;

    /**
     * @description 目的端口
     *
     * @var string
     */
    public $portRange;

    /**
     * @description 源网段
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description 源端口
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description 优先级
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'description'     => 'Description',
        'destCidrIp'      => 'DestCidrIp',
        'direction'       => 'Direction',
        'ipProtocol'      => 'IpProtocol',
        'policy'          => 'Policy',
        'portRange'       => 'PortRange',
        'sourceCidrIp'    => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
        'priority'        => 'priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SecurityGroupRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        return $model;
    }
}
