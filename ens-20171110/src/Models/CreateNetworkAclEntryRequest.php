<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkAclEntryRequest extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @var string
     */
    public $networkAclId;

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
    public $protocol;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'description' => 'Description',
        'destinationCidrBlock' => 'DestinationCidrBlock',
        'direction' => 'Direction',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'networkAclId' => 'NetworkAclId',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'priority' => 'Priority',
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
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

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }

        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
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

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
