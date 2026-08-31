<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetComputeClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetComputeClusterResponseBody\clusterConfig\clusterSafetyControl;

class clusterConfig extends Model
{
    /**
     * @var clusterSafetyControl
     */
    public $clusterSafetyControl;

    /**
     * @var string
     */
    public $des;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $typeVersion;
    protected $_name = [
        'clusterSafetyControl' => 'ClusterSafetyControl',
        'des' => 'Des',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'owner' => 'Owner',
        'typeVersion' => 'TypeVersion',
    ];

    public function validate()
    {
        if (null !== $this->clusterSafetyControl) {
            $this->clusterSafetyControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterSafetyControl) {
            $res['ClusterSafetyControl'] = null !== $this->clusterSafetyControl ? $this->clusterSafetyControl->toArray($noStream) : $this->clusterSafetyControl;
        }

        if (null !== $this->des) {
            $res['Des'] = $this->des;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['ClusterSafetyControl'])) {
            $model->clusterSafetyControl = clusterSafetyControl::fromMap($map['ClusterSafetyControl']);
        }

        if (isset($map['Des'])) {
            $model->des = $map['Des'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['TypeVersion'])) {
            $model->typeVersion = $map['TypeVersion'];
        }

        return $model;
    }
}
