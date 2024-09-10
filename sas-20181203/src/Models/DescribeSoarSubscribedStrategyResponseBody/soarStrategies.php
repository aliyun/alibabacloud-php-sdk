<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSoarSubscribedStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class soarStrategies extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the creator.
     *
     * @example 1276085*****4392
     *
     * @var string
     */
    public $creator;

    /**
     * @description The description of the policy.
     *
     * @example strategy_description_01
     *
     * @var string
     */
    public $description;

    /**
     * @description The total number of times that the policy is executed.
     *
     * @example 10
     *
     * @var string
     */
    public $executeNum;

    /**
     * @description The timestamp when the policy was created. Unit: milliseconds.
     *
     * @example 1716344106000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the policy was modified. Unit: milliseconds.
     *
     * @example 1652672104000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the policy.
     *
     * @example 300063
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the policy.
     *
     * @example strategy_name01
     *
     * @var string
     */
    public $name;

    /**
     * @description The execution mode. Valid values:
     *
     *   runmode_TRIGGER_BY_USER: manually executed
     *
     * @example runmode_TRIGGER_BY_USER
     *
     * @var string
     */
    public $runMode;

    /**
     * @description The type of the policy. Valid values:
     *
     *   type_vulfix: vulnerability operations
     *
     * @example type_vulfix
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'creator'     => 'Creator',
        'description' => 'Description',
        'executeNum'  => 'ExecuteNum',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
        'runMode'     => 'RunMode',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeNum) {
            $res['ExecuteNum'] = $this->executeNum;
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
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return soarStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteNum'])) {
            $model->executeNum = $map['ExecuteNum'];
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
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
