<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponse\permissions;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @var string
     */
    public $destCidrIp;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'destCidrIp'      => 'DestCidrIp',
        'sourceCidrIp'    => 'SourceCidrIp',
        'ipProtocol'      => 'IpProtocol',
        'priority'        => 'Priority',
        'policy'          => 'Policy',
        'direction'       => 'Direction',
        'creationTime'    => 'CreationTime',
        'portRange'       => 'PortRange',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
        Model::validateRequired('destCidrIp', $this->destCidrIp, true);
        Model::validateRequired('sourceCidrIp', $this->sourceCidrIp, true);
        Model::validateRequired('ipProtocol', $this->ipProtocol, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('direction', $this->direction, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('portRange', $this->portRange, true);
        Model::validateRequired('sourcePortRange', $this->sourcePortRange, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
