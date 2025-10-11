<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\components\securityGroups;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\components\securityIPArrays;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody\components\topology;

class components extends Model
{
    /**
     * @var string
     */
    public $componentClass;

    /**
     * @var string
     */
    public $componentClassDescription;

    /**
     * @var string
     */
    public $componentId;

    /**
     * @var int
     */
    public $componentMaxReplica;

    /**
     * @var int
     */
    public $componentReplica;

    /**
     * @var string
     */
    public $componentReplicaGroupName;

    /**
     * @var string
     */
    public $componentType;

    /**
     * @var securityGroups[]
     */
    public $securityGroups;

    /**
     * @var securityIPArrays[]
     */
    public $securityIPArrays;

    /**
     * @var string
     */
    public $status;

    /**
     * @var topology
     */
    public $topology;
    protected $_name = [
        'componentClass' => 'ComponentClass',
        'componentClassDescription' => 'ComponentClassDescription',
        'componentId' => 'ComponentId',
        'componentMaxReplica' => 'ComponentMaxReplica',
        'componentReplica' => 'ComponentReplica',
        'componentReplicaGroupName' => 'ComponentReplicaGroupName',
        'componentType' => 'ComponentType',
        'securityGroups' => 'SecurityGroups',
        'securityIPArrays' => 'SecurityIPArrays',
        'status' => 'Status',
        'topology' => 'Topology',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        if (\is_array($this->securityIPArrays)) {
            Model::validateArray($this->securityIPArrays);
        }
        if (null !== $this->topology) {
            $this->topology->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentClass) {
            $res['ComponentClass'] = $this->componentClass;
        }

        if (null !== $this->componentClassDescription) {
            $res['ComponentClassDescription'] = $this->componentClassDescription;
        }

        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        if (null !== $this->componentMaxReplica) {
            $res['ComponentMaxReplica'] = $this->componentMaxReplica;
        }

        if (null !== $this->componentReplica) {
            $res['ComponentReplica'] = $this->componentReplica;
        }

        if (null !== $this->componentReplicaGroupName) {
            $res['ComponentReplicaGroupName'] = $this->componentReplicaGroupName;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['SecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['SecurityGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->securityIPArrays) {
            if (\is_array($this->securityIPArrays)) {
                $res['SecurityIPArrays'] = [];
                $n1 = 0;
                foreach ($this->securityIPArrays as $item1) {
                    $res['SecurityIPArrays'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->topology) {
            $res['Topology'] = null !== $this->topology ? $this->topology->toArray($noStream) : $this->topology;
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
        if (isset($map['ComponentClass'])) {
            $model->componentClass = $map['ComponentClass'];
        }

        if (isset($map['ComponentClassDescription'])) {
            $model->componentClassDescription = $map['ComponentClassDescription'];
        }

        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        if (isset($map['ComponentMaxReplica'])) {
            $model->componentMaxReplica = $map['ComponentMaxReplica'];
        }

        if (isset($map['ComponentReplica'])) {
            $model->componentReplica = $map['ComponentReplica'];
        }

        if (isset($map['ComponentReplicaGroupName'])) {
            $model->componentReplicaGroupName = $map['ComponentReplicaGroupName'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['SecurityGroups'] as $item1) {
                    $model->securityGroups[$n1] = securityGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SecurityIPArrays'])) {
            if (!empty($map['SecurityIPArrays'])) {
                $model->securityIPArrays = [];
                $n1 = 0;
                foreach ($map['SecurityIPArrays'] as $item1) {
                    $model->securityIPArrays[$n1] = securityIPArrays::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Topology'])) {
            $model->topology = topology::fromMap($map['Topology']);
        }

        return $model;
    }
}
