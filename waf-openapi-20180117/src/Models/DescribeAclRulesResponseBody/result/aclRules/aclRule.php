<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules;

use AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAclRulesResponseBody\result\aclRules\aclRule\conditions;
use AlibabaCloud\Tea\Model;

class aclRule extends Model
{
    /**
     * @var int
     */
    public $action;

    /**
     * @var int
     */
    public $isDefault;

    /**
     * @var int
     */
    public $continueWaf;

    /**
     * @var int
     */
    public $order;

    /**
     * @var conditions
     */
    public $conditions;

    /**
     * @var int
     */
    public $continueDataRiskControl;

    /**
     * @var int
     */
    public $continueSdk;

    /**
     * @var int
     */
    public $continueCc;

    /**
     * @var int
     */
    public $continueSA;

    /**
     * @var int
     */
    public $continueBlockGeo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'action'                  => 'Action',
        'isDefault'               => 'IsDefault',
        'continueWaf'             => 'ContinueWaf',
        'order'                   => 'Order',
        'conditions'              => 'Conditions',
        'continueDataRiskControl' => 'ContinueDataRiskControl',
        'continueSdk'             => 'ContinueSdk',
        'continueCc'              => 'ContinueCc',
        'continueSA'              => 'ContinueSA',
        'continueBlockGeo'        => 'ContinueBlockGeo',
        'name'                    => 'Name',
        'id'                      => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->continueWaf) {
            $res['ContinueWaf'] = $this->continueWaf;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = null !== $this->conditions ? $this->conditions->toMap() : null;
        }
        if (null !== $this->continueDataRiskControl) {
            $res['ContinueDataRiskControl'] = $this->continueDataRiskControl;
        }
        if (null !== $this->continueSdk) {
            $res['ContinueSdk'] = $this->continueSdk;
        }
        if (null !== $this->continueCc) {
            $res['ContinueCc'] = $this->continueCc;
        }
        if (null !== $this->continueSA) {
            $res['ContinueSA'] = $this->continueSA;
        }
        if (null !== $this->continueBlockGeo) {
            $res['ContinueBlockGeo'] = $this->continueBlockGeo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ContinueWaf'])) {
            $model->continueWaf = $map['ContinueWaf'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Conditions'])) {
            $model->conditions = conditions::fromMap($map['Conditions']);
        }
        if (isset($map['ContinueDataRiskControl'])) {
            $model->continueDataRiskControl = $map['ContinueDataRiskControl'];
        }
        if (isset($map['ContinueSdk'])) {
            $model->continueSdk = $map['ContinueSdk'];
        }
        if (isset($map['ContinueCc'])) {
            $model->continueCc = $map['ContinueCc'];
        }
        if (isset($map['ContinueSA'])) {
            $model->continueSA = $map['ContinueSA'];
        }
        if (isset($map['ContinueBlockGeo'])) {
            $model->continueBlockGeo = $map['ContinueBlockGeo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
