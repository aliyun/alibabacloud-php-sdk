<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var int
     */
    public $asapVulInstanceCount;

    /**
     * @var string
     */
    public $fieldAliasName;

    /**
     * @var int
     */
    public $groupFlag;

    /**
     * @var string
     */
    public $instanceCount;

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
        'fieldAliasName'           => 'FieldAliasName',
        'groupFlag'                => 'GroupFlag',
        'instanceCount'            => 'InstanceCount',
        'riskInstanceCount'        => 'RiskInstanceCount',
        'unProtectedInstanceCount' => 'UnProtectedInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asapVulInstanceCount) {
            $res['AsapVulInstanceCount'] = $this->asapVulInstanceCount;
        }
        if (null !== $this->fieldAliasName) {
            $res['FieldAliasName'] = $this->fieldAliasName;
        }
        if (null !== $this->groupFlag) {
            $res['GroupFlag'] = $this->groupFlag;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
        }
        if (null !== $this->unProtectedInstanceCount) {
            $res['UnProtectedInstanceCount'] = $this->unProtectedInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsapVulInstanceCount'])) {
            $model->asapVulInstanceCount = $map['AsapVulInstanceCount'];
        }
        if (isset($map['FieldAliasName'])) {
            $model->fieldAliasName = $map['FieldAliasName'];
        }
        if (isset($map['GroupFlag'])) {
            $model->groupFlag = $map['GroupFlag'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
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
