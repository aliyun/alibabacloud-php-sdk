<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $componentClass;

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
    public $componentType;

    /**
     * @var string
     */
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $securityGroups;

    /**
     * @var string
     */
    public $securityIPArrayName;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $securityIPType;
    protected $_name = [
        'componentClass' => 'ComponentClass',
        'componentMaxReplica' => 'ComponentMaxReplica',
        'componentReplica' => 'ComponentReplica',
        'componentType' => 'ComponentType',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'securityGroups' => 'SecurityGroups',
        'securityIPArrayName' => 'SecurityIPArrayName',
        'securityIPList' => 'SecurityIPList',
        'securityIPType' => 'SecurityIPType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentClass) {
            $res['ComponentClass'] = $this->componentClass;
        }

        if (null !== $this->componentMaxReplica) {
            $res['ComponentMaxReplica'] = $this->componentMaxReplica;
        }

        if (null !== $this->componentReplica) {
            $res['ComponentReplica'] = $this->componentReplica;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = $this->securityGroups;
        }

        if (null !== $this->securityIPArrayName) {
            $res['SecurityIPArrayName'] = $this->securityIPArrayName;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
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

        if (isset($map['ComponentMaxReplica'])) {
            $model->componentMaxReplica = $map['ComponentMaxReplica'];
        }

        if (isset($map['ComponentReplica'])) {
            $model->componentReplica = $map['ComponentReplica'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = $map['SecurityGroups'];
        }

        if (isset($map['SecurityIPArrayName'])) {
            $model->securityIPArrayName = $map['SecurityIPArrayName'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }

        return $model;
    }
}
