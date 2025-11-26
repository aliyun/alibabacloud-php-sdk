<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupPermissionsRequest;

use AlibabaCloud\Dara\Model;

class permissions extends Model
{
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
    public $ipv6DestCidrIp;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $portRange;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'destCidrIp' => 'DestCidrIp',
        'direction' => 'Direction',
        'ipProtocol' => 'IpProtocol',
        'ipv6DestCidrIp' => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'priority' => 'Priority',
        'sourceCidrIp' => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }

        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
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
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }

        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
