<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetUserWafRulesetResponseBody\ruleset;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

class rules extends Model
{
    /**
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
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $position;

    /**
     * @var int
     */
    public $rulesetId;

    /**
     * @var string
     */
    public $skip;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'action' => 'Action',
        'characteristicsFields' => 'CharacteristicsFields',
        'config' => 'Config',
        'fields' => 'Fields',
        'id' => 'Id',
        'name' => 'Name',
        'phase' => 'Phase',
        'position' => 'Position',
        'rulesetId' => 'RulesetId',
        'skip' => 'Skip',
        'status' => 'Status',
        'tags' => 'Tags',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->characteristicsFields)) {
            Model::validateArray($this->characteristicsFields);
        }
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->characteristicsFields) {
            if (\is_array($this->characteristicsFields)) {
                $res['CharacteristicsFields'] = [];
                $n1 = 0;
                foreach ($this->characteristicsFields as $item1) {
                    $res['CharacteristicsFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['CharacteristicsFields'])) {
            if (!empty($map['CharacteristicsFields'])) {
                $model->characteristicsFields = [];
                $n1 = 0;
                foreach ($map['CharacteristicsFields'] as $item1) {
                    $model->characteristicsFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Config'])) {
            $model->config = WafRuleConfig::fromMap($map['Config']);
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = $item1;
                    ++$n1;
                }
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
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
