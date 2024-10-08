<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafRulesResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example deny
     *
     * @var string
     */
    public $action;

    /**
     * @var string[]
     */
    public $characteristicsFields;

    /**
     * @var WafRuleConfig
     */
    public $config;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @example 20000001
     *
     * @var int
     */
    public $id;

    /**
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @example 10000001
     *
     * @var int
     */
    public $rulesetId;

    /**
     * @example part
     *
     * @var string
     */
    public $skip;

    /**
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var WafTimer
     */
    public $timer;

    /**
     * @example http_custom
     *
     * @var string
     */
    public $type;

    /**
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'action'                => 'Action',
        'characteristicsFields' => 'CharacteristicsFields',
        'config'                => 'Config',
        'fields'                => 'Fields',
        'id'                    => 'Id',
        'name'                  => 'Name',
        'phase'                 => 'Phase',
        'position'              => 'Position',
        'rulesetId'             => 'RulesetId',
        'skip'                  => 'Skip',
        'status'                => 'Status',
        'tags'                  => 'Tags',
        'timer'                 => 'Timer',
        'type'                  => 'Type',
        'updateTime'            => 'UpdateTime',
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
        if (null !== $this->characteristicsFields) {
            $res['CharacteristicsFields'] = $this->characteristicsFields;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toMap() : null;
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
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CharacteristicsFields'])) {
            if (!empty($map['CharacteristicsFields'])) {
                $model->characteristicsFields = $map['CharacteristicsFields'];
            }
        }
        if (isset($map['Config'])) {
            $model->config = WafRuleConfig::fromMap($map['Config']);
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = $map['Fields'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['Timer'])) {
            $model->timer = WafTimer::fromMap($map['Timer']);
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
