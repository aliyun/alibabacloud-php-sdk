<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ApplyTagPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the field is the primary key.
     *
     * @example true
     *
     * @var bool
     */
    public $carryData;

    /**
     * @description Indicates whether the rule is enabled. Valid values:
     *
     *   `true`: The rule is enabled.
     *   `false`: The rule is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ID of the primary key.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The policy name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The rate.
     *
     * @example 10
     *
     * @var int
     */
    public $rate;

    /**
     * @description Indicates whether the routing rule was deleted.
     *
     * @var bool
     */
    public $remove;

    /**
     * @description The details of the routing rule.
     *
     * @example {\"_base\": {\"rate\": 100, \"remove\": true}, \"blue\": {\"rate\": 0}}
     *
     * @var string
     */
    public $rules;

    /**
     * @description The status.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The tag.
     *
     * @example gray
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'carryData'   => 'CarryData',
        'enable'      => 'Enable',
        'id'          => 'Id',
        'instanceNum' => 'InstanceNum',
        'name'        => 'Name',
        'rate'        => 'Rate',
        'remove'      => 'Remove',
        'rules'       => 'Rules',
        'status'      => 'Status',
        'tag'         => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carryData) {
            $res['CarryData'] = $this->carryData;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CarryData'])) {
            $model->carryData = $map['CarryData'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
