<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips\associatedEipAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips\associatedInstances;

class haVips extends Model
{
    /**
     * @var associatedEipAddresses[]
     */
    public $associatedEipAddresses;

    /**
     * @var associatedInstances[]
     */
    public $associatedInstances;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $haVipId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'associatedEipAddresses' => 'AssociatedEipAddresses',
        'associatedInstances' => 'AssociatedInstances',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'haVipId' => 'HaVipId',
        'ipAddress' => 'IpAddress',
        'name' => 'Name',
        'networkId' => 'NetworkId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->associatedEipAddresses)) {
            Model::validateArray($this->associatedEipAddresses);
        }
        if (\is_array($this->associatedInstances)) {
            Model::validateArray($this->associatedInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedEipAddresses) {
            if (\is_array($this->associatedEipAddresses)) {
                $res['AssociatedEipAddresses'] = [];
                $n1 = 0;
                foreach ($this->associatedEipAddresses as $item1) {
                    $res['AssociatedEipAddresses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associatedInstances) {
            if (\is_array($this->associatedInstances)) {
                $res['AssociatedInstances'] = [];
                $n1 = 0;
                foreach ($this->associatedInstances as $item1) {
                    $res['AssociatedInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
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
        if (isset($map['AssociatedEipAddresses'])) {
            if (!empty($map['AssociatedEipAddresses'])) {
                $model->associatedEipAddresses = [];
                $n1 = 0;
                foreach ($map['AssociatedEipAddresses'] as $item1) {
                    $model->associatedEipAddresses[$n1] = associatedEipAddresses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AssociatedInstances'])) {
            if (!empty($map['AssociatedInstances'])) {
                $model->associatedInstances = [];
                $n1 = 0;
                foreach ($map['AssociatedInstances'] as $item1) {
                    $model->associatedInstances[$n1] = associatedInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
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
