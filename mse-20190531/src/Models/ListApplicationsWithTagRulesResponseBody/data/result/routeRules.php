<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListApplicationsWithTagRulesResponseBody\data\result\routeRules\rules;

class routeRules extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $instanceNum;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $rate;
    /**
     * @var rules
     */
    public $rules;
    /**
     * @var int
     */
    public $status;
    /**
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
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
