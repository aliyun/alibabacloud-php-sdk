<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus\featureContainers;

class featureStatus extends Model
{
    /**
     * @var string
     */
    public $bindResourceId;

    /**
     * @var featureContainers[]
     */
    public $featureContainers;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'bindResourceId' => 'BindResourceId',
        'featureContainers' => 'FeatureContainers',
        'ips' => 'Ips',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'securityGroupId' => 'SecurityGroupId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->featureContainers)) {
            Model::validateArray($this->featureContainers);
        }
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindResourceId) {
            $res['BindResourceId'] = $this->bindResourceId;
        }

        if (null !== $this->featureContainers) {
            if (\is_array($this->featureContainers)) {
                $res['FeatureContainers'] = [];
                $n1 = 0;
                foreach ($this->featureContainers as $item1) {
                    $res['FeatureContainers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BindResourceId'])) {
            $model->bindResourceId = $map['BindResourceId'];
        }

        if (isset($map['FeatureContainers'])) {
            if (!empty($map['FeatureContainers'])) {
                $model->featureContainers = [];
                $n1 = 0;
                foreach ($map['FeatureContainers'] as $item1) {
                    $model->featureContainers[$n1] = featureContainers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
