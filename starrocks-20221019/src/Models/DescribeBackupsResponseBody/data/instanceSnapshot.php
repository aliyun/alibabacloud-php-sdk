<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data\instanceSnapshot\nodeGroups;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeBackupsResponseBody\data\instanceSnapshot\tags;

class instanceSnapshot extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $minorVersion;

    /**
     * @var nodeGroups[]
     */
    public $nodeGroups;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'minorVersion' => 'MinorVersion',
        'nodeGroups' => 'NodeGroups',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runMode' => 'RunMode',
        'specType' => 'SpecType',
        'tags' => 'Tags',
        'version' => 'Version',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroups)) {
            Model::validateArray($this->nodeGroups);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1 = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }

        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n1 = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1] = nodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
