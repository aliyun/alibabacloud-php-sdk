<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class BizTraceConfig extends Model
{
    /**
     * @var string
     */
    public $advancedConfig;

    /**
     * @var string
     */
    public $bizTraceCode;

    /**
     * @var string
     */
    public $bizTraceId;

    /**
     * @var string
     */
    public $bizTraceName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'advancedConfig' => 'advancedConfig',
        'bizTraceCode' => 'bizTraceCode',
        'bizTraceId' => 'bizTraceId',
        'bizTraceName' => 'bizTraceName',
        'createTime' => 'createTime',
        'regionId' => 'regionId',
        'ruleConfig' => 'ruleConfig',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedConfig) {
            $res['advancedConfig'] = $this->advancedConfig;
        }

        if (null !== $this->bizTraceCode) {
            $res['bizTraceCode'] = $this->bizTraceCode;
        }

        if (null !== $this->bizTraceId) {
            $res['bizTraceId'] = $this->bizTraceId;
        }

        if (null !== $this->bizTraceName) {
            $res['bizTraceName'] = $this->bizTraceName;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->ruleConfig) {
            $res['ruleConfig'] = $this->ruleConfig;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['advancedConfig'])) {
            $model->advancedConfig = $map['advancedConfig'];
        }

        if (isset($map['bizTraceCode'])) {
            $model->bizTraceCode = $map['bizTraceCode'];
        }

        if (isset($map['bizTraceId'])) {
            $model->bizTraceId = $map['bizTraceId'];
        }

        if (isset($map['bizTraceName'])) {
            $model->bizTraceName = $map['bizTraceName'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['ruleConfig'])) {
            $model->ruleConfig = $map['ruleConfig'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
