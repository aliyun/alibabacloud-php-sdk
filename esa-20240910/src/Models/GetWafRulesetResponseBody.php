<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetWafRulesetResponseBody extends Model
{
    /**
     * @description The ruleset ID.
     *
     * @example 10000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The ruleset name.
     *
     * This parameter is required.
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The WAF rule category of the ruleset.
     *
     * This parameter is required.
     * @example http_bot
     *
     * @var string
     */
    public $phase;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The rule configurations in the ruleset.
     *
     * @var WafRuleConfig[]
     */
    public $rules;

    /**
     * @description The configurations shared by the rules in the ruleset.
     *
     * @var WafBatchRuleShared
     */
    public $shared;

    /**
     * @description The ruleset status.
     *
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the ruleset was last modified.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'id'         => 'Id',
        'name'       => 'Name',
        'phase'      => 'Phase',
        'requestId'  => 'RequestId',
        'rules'      => 'Rules',
        'shared'     => 'Shared',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWafRulesetResponseBody
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
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? WafRuleConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Shared'])) {
            $model->shared = WafBatchRuleShared::fromMap($map['Shared']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
