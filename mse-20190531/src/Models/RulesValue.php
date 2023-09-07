<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\RulesValue\rules;
use AlibabaCloud\Tea\Model;

class RulesValue extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $tag;

    /**
     * @example gray
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var rules
     */
    public $rules;
    protected $_name = [
        'status'      => 'Status',
        'rate'        => 'Rate',
        'enable'      => 'Enable',
        'tag'         => 'Tag',
        'name'        => 'Name',
        'id'          => 'Id',
        'instanceNum' => 'InstanceNum',
        'rules'       => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RulesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }

        return $model;
    }
}
