<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDegradeControlsResponseBody\flowControlsMap\ruleList\ruleResultList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $rtThreshold;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'resource'    => 'Resource',
        'ruleType'    => 'RuleType',
        'updateTime'  => 'UpdateTime',
        'state'       => 'State',
        'createTime'  => 'CreateTime',
        'appId'       => 'AppId',
        'duration'    => 'Duration',
        'rtThreshold' => 'RtThreshold',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->rtThreshold) {
            $res['RtThreshold'] = $this->rtThreshold;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RtThreshold'])) {
            $model->rtThreshold = $map['RtThreshold'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
