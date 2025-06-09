<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance\hostInstances;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsInstanceResponseBody\dbInstance\tag;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $dasId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dmsId;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var hostInstances[]
     */
    public $hostInstances;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceStorageCapacity;

    /**
     * @var string
     */
    public $instanceStorageType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'alias' => 'Alias',
        'dasId' => 'DasId',
        'description' => 'Description',
        'dmsId' => 'DmsId',
        'engineType' => 'EngineType',
        'engineVersion' => 'EngineVersion',
        'gmtCreated' => 'GmtCreated',
        'hostInstances' => 'HostInstances',
        'instanceClass' => 'InstanceClass',
        'instanceName' => 'InstanceName',
        'instanceStorageCapacity' => 'InstanceStorageCapacity',
        'instanceStorageType' => 'InstanceStorageType',
        'networkType' => 'NetworkType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->hostInstances)) {
            Model::validateArray($this->hostInstances);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->dasId) {
            $res['DasId'] = $this->dasId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dmsId) {
            $res['DmsId'] = $this->dmsId;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->hostInstances) {
            if (\is_array($this->hostInstances)) {
                $res['HostInstances'] = [];
                $n1 = 0;
                foreach ($this->hostInstances as $item1) {
                    $res['HostInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceStorageCapacity) {
            $res['InstanceStorageCapacity'] = $this->instanceStorageCapacity;
        }

        if (null !== $this->instanceStorageType) {
            $res['InstanceStorageType'] = $this->instanceStorageType;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['DasId'])) {
            $model->dasId = $map['DasId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DmsId'])) {
            $model->dmsId = $map['DmsId'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['HostInstances'])) {
            if (!empty($map['HostInstances'])) {
                $model->hostInstances = [];
                $n1 = 0;
                foreach ($map['HostInstances'] as $item1) {
                    $model->hostInstances[$n1++] = hostInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceStorageCapacity'])) {
            $model->instanceStorageCapacity = $map['InstanceStorageCapacity'];
        }

        if (isset($map['InstanceStorageType'])) {
            $model->instanceStorageType = $map['InstanceStorageType'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
