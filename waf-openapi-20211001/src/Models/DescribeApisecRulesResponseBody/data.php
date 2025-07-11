<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the policy.
     *
     * @example 34933
     *
     * @var int
     */
    public $id;

    /**
     * @description The details of the policy. The value is a string that consists of multiple parameters in the JSON format.
     *
     * @example {
     * "ext": "Date",
     * "regex": "-",
     * "code": "2009",
     * "level": "S1",
     * "origin": "default",
     * "name": "2009"
     * }
     *
     * @var string
     */
    public $rule;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **risk**: risk detection
     *   **event**: security event
     *   **sensitive_word**: sensitive data
     *   **auth_flag**: authentication credential
     *   **api_tag**: business purpose
     *   **desensitization**: data masking
     *   **whitelist**: whitelist
     *   **recognition**: API recognition
     *   **offline_api**: lifecycle management
     *
     * @example risk
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the policy was updated. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1721095301
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'id' => 'Id',
        'rule' => 'Rule',
        'status' => 'Status',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
