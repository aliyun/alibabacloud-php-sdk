<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\egressAclEntries;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\ingressAclEntries;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls\resources;

class networkAcls extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var egressAclEntries[]
     */
    public $egressAclEntries;

    /**
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $networkAclName;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'egressAclEntries' => 'EgressAclEntries',
        'ingressAclEntries' => 'IngressAclEntries',
        'networkAclId' => 'NetworkAclId',
        'networkAclName' => 'NetworkAclName',
        'resources' => 'Resources',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->egressAclEntries)) {
            Model::validateArray($this->egressAclEntries);
        }
        if (\is_array($this->ingressAclEntries)) {
            Model::validateArray($this->ingressAclEntries);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressAclEntries) {
            if (\is_array($this->egressAclEntries)) {
                $res['EgressAclEntries'] = [];
                $n1 = 0;
                foreach ($this->egressAclEntries as $item1) {
                    $res['EgressAclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ingressAclEntries) {
            if (\is_array($this->ingressAclEntries)) {
                $res['IngressAclEntries'] = [];
                $n1 = 0;
                foreach ($this->ingressAclEntries as $item1) {
                    $res['IngressAclEntries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }

        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressAclEntries'])) {
            if (!empty($map['EgressAclEntries'])) {
                $model->egressAclEntries = [];
                $n1 = 0;
                foreach ($map['EgressAclEntries'] as $item1) {
                    $model->egressAclEntries[$n1] = egressAclEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n1 = 0;
                foreach ($map['IngressAclEntries'] as $item1) {
                    $model->ingressAclEntries[$n1] = ingressAclEntries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }

        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
