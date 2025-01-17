<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $asapVulInstanceCount;
    /**
     * @var int
     */
    public $authVersionCheckCount;
    /**
     * @var string
     */
    public $fieldAliasName;
    /**
     * @var int
     */
    public $groupFlag;
    /**
     * @var int
     */
    public $instanceCoreCount;
    /**
     * @var string
     */
    public $instanceCount;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $riskInstanceCount;
    /**
     * @var string
     */
    public $unProtectedInstanceCount;
    protected $_name = [
        'asapVulInstanceCount'     => 'AsapVulInstanceCount',
        'authVersionCheckCount'    => 'AuthVersionCheckCount',
        'fieldAliasName'           => 'FieldAliasName',
        'groupFlag'                => 'GroupFlag',
        'instanceCoreCount'        => 'InstanceCoreCount',
        'instanceCount'            => 'InstanceCount',
        'os'                       => 'Os',
        'riskInstanceCount'        => 'RiskInstanceCount',
        'unProtectedInstanceCount' => 'UnProtectedInstanceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asapVulInstanceCount) {
            $res['AsapVulInstanceCount'] = $this->asapVulInstanceCount;
        }

        if (null !== $this->authVersionCheckCount) {
            $res['AuthVersionCheckCount'] = $this->authVersionCheckCount;
        }

        if (null !== $this->fieldAliasName) {
            $res['FieldAliasName'] = $this->fieldAliasName;
        }

        if (null !== $this->groupFlag) {
            $res['GroupFlag'] = $this->groupFlag;
        }

        if (null !== $this->instanceCoreCount) {
            $res['InstanceCoreCount'] = $this->instanceCoreCount;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }

        if (null !== $this->unProtectedInstanceCount) {
            $res['UnProtectedInstanceCount'] = $this->unProtectedInstanceCount;
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
        if (isset($map['AsapVulInstanceCount'])) {
            $model->asapVulInstanceCount = $map['AsapVulInstanceCount'];
        }

        if (isset($map['AuthVersionCheckCount'])) {
            $model->authVersionCheckCount = $map['AuthVersionCheckCount'];
        }

        if (isset($map['FieldAliasName'])) {
            $model->fieldAliasName = $map['FieldAliasName'];
        }

        if (isset($map['GroupFlag'])) {
            $model->groupFlag = $map['GroupFlag'];
        }

        if (isset($map['InstanceCoreCount'])) {
            $model->instanceCoreCount = $map['InstanceCoreCount'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }

        if (isset($map['UnProtectedInstanceCount'])) {
            $model->unProtectedInstanceCount = $map['UnProtectedInstanceCount'];
        }

        return $model;
    }
}
