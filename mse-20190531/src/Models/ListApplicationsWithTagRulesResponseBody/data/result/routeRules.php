<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules;
use AlibabaCloud\Tea\Model;

class routeRules extends Model
{
    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The rule ID.
     *
     * @example 653
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
     * @description The rule name.
     *
     * @example dubbo
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
     * @description The details of the routing rule.
     *
     * @example {
     * }
     * @var rules
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
        'enable'      => 'Enable',
        'id'          => 'Id',
        'instanceNum' => 'InstanceNum',
        'name'        => 'Name',
        'rate'        => 'Rate',
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
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
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
     * @return routeRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
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
