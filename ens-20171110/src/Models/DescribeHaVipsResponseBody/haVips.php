<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips\associatedEipAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips\associatedInstances;
use AlibabaCloud\Tea\Model;

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
     * @example 2023-03-29T11:17:38Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-guiyang-14
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example havip-52y28****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @example 192.XX.XX.5
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example n-5wtkyrk****
     *
     * @var string
     */
    public $networkId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-5yc8d****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'associatedEipAddresses' => 'AssociatedEipAddresses',
        'associatedInstances'    => 'AssociatedInstances',
        'creationTime'           => 'CreationTime',
        'description'            => 'Description',
        'ensRegionId'            => 'EnsRegionId',
        'haVipId'                => 'HaVipId',
        'ipAddress'              => 'IpAddress',
        'name'                   => 'Name',
        'networkId'              => 'NetworkId',
        'status'                 => 'Status',
        'vSwitchId'              => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedEipAddresses) {
            $res['AssociatedEipAddresses'] = [];
            if (null !== $this->associatedEipAddresses && \is_array($this->associatedEipAddresses)) {
                $n = 0;
                foreach ($this->associatedEipAddresses as $item) {
                    $res['AssociatedEipAddresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associatedInstances) {
            $res['AssociatedInstances'] = [];
            if (null !== $this->associatedInstances && \is_array($this->associatedInstances)) {
                $n = 0;
                foreach ($this->associatedInstances as $item) {
                    $res['AssociatedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return haVips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedEipAddresses'])) {
            if (!empty($map['AssociatedEipAddresses'])) {
                $model->associatedEipAddresses = [];
                $n                             = 0;
                foreach ($map['AssociatedEipAddresses'] as $item) {
                    $model->associatedEipAddresses[$n++] = null !== $item ? associatedEipAddresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AssociatedInstances'])) {
            if (!empty($map['AssociatedInstances'])) {
                $model->associatedInstances = [];
                $n                          = 0;
                foreach ($map['AssociatedInstances'] as $item) {
                    $model->associatedInstances[$n++] = null !== $item ? associatedInstances::fromMap($item) : $item;
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
