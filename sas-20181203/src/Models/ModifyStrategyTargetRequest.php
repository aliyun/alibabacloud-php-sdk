<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStrategyTargetRequest extends Model
{
    /**
     * @description The ID of the baseline check policy. The ID is returned after the policy is created. The value of this parameter is in the JSON format and contains the following field:
     *
     *   **strategyId**: the ID of the policy
     *
     * @example {"strategyId":8070645}
     *
     * @var string
     */
    public $config;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The information about the asset group to which the policy is applied. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **TargetType**: the type of the asset to which the policy is applied. Set the value to **groupId**, which indicates that the policy is applied to an asset group.
     *
     *   **BindUuidCount**: the number of servers to which the policy is applied.
     *
     *   **Target**: the ID of the asset group.
     *
     *   **Flag**: the operation that you want to perform on the asset group. Valid values:
     *
     *   **del**: removes the asset group from the policy.
     *   **add**: adds the asset group to the policy.
     *
     * @example [{"Target":"9273980","BindUuidCount":5320,"TargetType":"groupId","Flag":"del"},{"Target":"9677606","TargetType":"groupId","Flag":"del"},{"Target":"10121607","BindUuidCount":7,"TargetType":"groupId","Flag":"add"},{"Target":"10670708","BindUuidCount":2,"TargetType":"groupId","Flag":"del"},{"Target":"11246338","BindUuidCount":6,"TargetType":"groupId","Flag":"del"},{"Target":"11291161","BindUuidCount":13,"TargetType":"groupId","Flag":"del"}]
     *
     * @var string
     */
    public $target;

    /**
     * @description The configuration type. Set the value to **hc_strategy**.
     *
     * @example hc_strategy
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'   => 'Config',
        'sourceIp' => 'SourceIp',
        'target'   => 'Target',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStrategyTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
