<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\ListConfigRulesResponse\configRules\configRuleList;

use AlibabaCloud\Tea\Model;

class createBy extends Model
{
    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $creatorType;

    /**
     * @var string
     */
    public $configRuleSceneId;

    /**
     * @var string
     */
    public $configRuleSceneName;
    protected $_name = [
        'creatorId'           => 'CreatorId',
        'creatorName'         => 'CreatorName',
        'creatorType'         => 'CreatorType',
        'configRuleSceneId'   => 'ConfigRuleSceneId',
        'configRuleSceneName' => 'ConfigRuleSceneName',
    ];

    public function validate()
    {
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('creatorName', $this->creatorName, true);
        Model::validateRequired('creatorType', $this->creatorType, true);
        Model::validateRequired('configRuleSceneId', $this->configRuleSceneId, true);
        Model::validateRequired('configRuleSceneName', $this->configRuleSceneName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->creatorType) {
            $res['CreatorType'] = $this->creatorType;
        }
        if (null !== $this->configRuleSceneId) {
            $res['ConfigRuleSceneId'] = $this->configRuleSceneId;
        }
        if (null !== $this->configRuleSceneName) {
            $res['ConfigRuleSceneName'] = $this->configRuleSceneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createBy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['CreatorType'])) {
            $model->creatorType = $map['CreatorType'];
        }
        if (isset($map['ConfigRuleSceneId'])) {
            $model->configRuleSceneId = $map['ConfigRuleSceneId'];
        }
        if (isset($map['ConfigRuleSceneName'])) {
            $model->configRuleSceneName = $map['ConfigRuleSceneName'];
        }

        return $model;
    }
}
