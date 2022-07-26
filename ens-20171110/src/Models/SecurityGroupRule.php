<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SecurityGroupRule extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $sourcePortRange;

    /**
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
