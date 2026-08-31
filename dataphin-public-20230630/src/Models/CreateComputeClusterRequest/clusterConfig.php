<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeClusterRequest\clusterConfig\clusterSafetyControl;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateComputeClusterRequest\clusterConfig\configList;

class clusterConfig extends Model
{
    /**
     * @var string[]
     */
    public $clusterAdmins;

    /**
     * @var clusterSafetyControl
     */
    public $clusterSafetyControl;

    /**
     * @var configList[]
     */
    public $configList;

    /**
     * @var string
     */
    public $des;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeVersion;
    protected $_name = [
        'clusterAdmins' => 'ClusterAdmins',
        'clusterSafetyControl' => 'ClusterSafetyControl',
        'configList' => 'ConfigList',
        'des' => 'Des',
        'name' => 'Name',
        'type' => 'Type',
        'typeVersion' => 'TypeVersion',
    ];

    public function validate()
    {
        if (\is_array($this->clusterAdmins)) {
            Model::validateArray($this->clusterAdmins);
        }
        if (null !== $this->clusterSafetyControl) {
            $this->clusterSafetyControl->validate();
        }
        if (\is_array($this->configList)) {
            Model::validateArray($this->configList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterAdmins) {
            if (\is_array($this->clusterAdmins)) {
                $res['ClusterAdmins'] = [];
                $n1 = 0;
                foreach ($this->clusterAdmins as $item1) {
                    $res['ClusterAdmins'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterSafetyControl) {
            $res['ClusterSafetyControl'] = null !== $this->clusterSafetyControl ? $this->clusterSafetyControl->toArray($noStream) : $this->clusterSafetyControl;
        }

        if (null !== $this->configList) {
            if (\is_array($this->configList)) {
                $res['ConfigList'] = [];
                $n1 = 0;
                foreach ($this->configList as $item1) {
                    $res['ConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->des) {
            $res['Des'] = $this->des;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeVersion) {
            $res['TypeVersion'] = $this->typeVersion;
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
        if (isset($map['ClusterAdmins'])) {
            if (!empty($map['ClusterAdmins'])) {
                $model->clusterAdmins = [];
                $n1 = 0;
                foreach ($map['ClusterAdmins'] as $item1) {
                    $model->clusterAdmins[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterSafetyControl'])) {
            $model->clusterSafetyControl = clusterSafetyControl::fromMap($map['ClusterSafetyControl']);
        }

        if (isset($map['ConfigList'])) {
            if (!empty($map['ConfigList'])) {
                $model->configList = [];
                $n1 = 0;
                foreach ($map['ConfigList'] as $item1) {
                    $model->configList[$n1] = configList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Des'])) {
            $model->des = $map['Des'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeVersion'])) {
            $model->typeVersion = $map['TypeVersion'];
        }

        return $model;
    }
}
