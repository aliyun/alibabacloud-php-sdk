<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDefaultRulesResponseBody\content;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example block
     *
     * @var string
     */
    public $action;

    /**
     * @example {\"wafGroupIds\":\"1012\"}
     *
     * @var string
     */
    public $config;

    /**
     * @example Default_WafGroup_Rule
     *
     * @var string
     */
    public $name;

    /**
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @example waf_group
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action' => 'Action',
        'config' => 'Config',
        'name'   => 'Name',
        'status' => 'Status',
        'type'   => 'Type',
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
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
