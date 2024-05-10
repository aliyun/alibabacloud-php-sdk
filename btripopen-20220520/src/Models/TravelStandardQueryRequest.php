<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TravelStandardQueryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $fromGroup;

    /**
     * @description This parameter is required.
     *
     * @example 2006523763
     *
     * @var int
     */
    public $ruleCode;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $serviceTypeList;
    protected $_name = [
        'fromGroup'       => 'from_group',
        'ruleCode'        => 'rule_code',
        'serviceTypeList' => 'service_type_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromGroup) {
            $res['from_group'] = $this->fromGroup;
        }
        if (null !== $this->ruleCode) {
            $res['rule_code'] = $this->ruleCode;
        }
        if (null !== $this->serviceTypeList) {
            $res['service_type_list'] = $this->serviceTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TravelStandardQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from_group'])) {
            $model->fromGroup = $map['from_group'];
        }
        if (isset($map['rule_code'])) {
            $model->ruleCode = $map['rule_code'];
        }
        if (isset($map['service_type_list'])) {
            if (!empty($map['service_type_list'])) {
                $model->serviceTypeList = $map['service_type_list'];
            }
        }

        return $model;
    }
}
