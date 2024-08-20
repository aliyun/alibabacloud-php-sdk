<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class ModifyDcdnWafGroupRequest extends Model
{
    /**
     * @description The ID of the custom WAF rule group.
     *
     * This parameter is required.
     * @example 30000110
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the custom WAF rule group.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The incremental modifications of the rules in the custom WAF rule group. The value is a JSON string.
     *
     * @example {\\"All\\":false,\\"Op\\":\\"del\\",\\"List\\":\\"900109\\"}
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'id'    => 'Id',
        'name'  => 'Name',
        'rules' => 'Rules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDcdnWafGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
