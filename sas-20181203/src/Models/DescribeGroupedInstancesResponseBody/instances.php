<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The number of assets on which high-risk vulnerabilities are detected.
     *
     * @example 11
     *
     * @var int
     */
    public $asapVulInstanceCount;

    /**
     * @example 205
     *
     * @var int
     */
    public $authVersionCheckCount;

    /**
     * @description The name of the server group.
     *
     * @example testA
     *
     * @var string
     */
    public $fieldAliasName;

    /**
     * @description The type of the server group. Valid values:
     *
     *   **0**: the default group
     *   **1**: other group
     *
     * @example 1
     *
     * @var int
     */
    public $groupFlag;

    /**
     * @description The total number of assets that belong to the specified type.
     *
     * >  If the **MachineTypes** request parameter is not specified, the value of the InstanceCount parameter is the total number of your assets.
     * @example 205
     *
     * @var string
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $os;

    /**
     * @description The number of assets that are at risk.
     *
     * @example 172
     *
     * @var string
     */
    public $riskInstanceCount;

    /**
     * @description The number of assets that are not protected by Security Center.
     *
     * @example 32
     *
     * @var string
     */
    public $unProtectedInstanceCount;
    protected $_name = [
        'asapVulInstanceCount'     => 'AsapVulInstanceCount',
        'authVersionCheckCount'    => 'AuthVersionCheckCount',
        'fieldAliasName'           => 'FieldAliasName',
        'groupFlag'                => 'GroupFlag',
        'instanceCount'            => 'InstanceCount',
        'os'                       => 'Os',
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
        if (null !== $this->authVersionCheckCount) {
            $res['AuthVersionCheckCount'] = $this->authVersionCheckCount;
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
        if (isset($map['AuthVersionCheckCount'])) {
            $model->authVersionCheckCount = $map['AuthVersionCheckCount'];
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
