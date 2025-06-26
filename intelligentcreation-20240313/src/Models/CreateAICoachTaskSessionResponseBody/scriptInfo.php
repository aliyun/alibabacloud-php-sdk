<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionResponseBody;

use AlibabaCloud\Dara\Model;

class scriptInfo extends Model
{
    /**
     * @var string
     */
    public $agentIconUrl;

    /**
     * @var string
     */
    public $characterName;

    /**
     * @var bool
     */
    public $dialogueTextFlag;

    /**
     * @var bool
     */
    public $dialogueTipFlag;

    /**
     * @var string
     */
    public $initiator;

    /**
     * @var string[]
     */
    public $inputTypeList;

    /**
     * @var int
     */
    public $maxDuration;

    /**
     * @var string
     */
    public $scriptDesc;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptRecordId;

    /**
     * @var int
     */
    public $scriptType;

    /**
     * @var string
     */
    public $sparringTipContent;

    /**
     * @var string
     */
    public $sparringTipTitle;

    /**
     * @var bool
     */
    public $studentThinkTimeFlag;

    /**
     * @var int
     */
    public $studentThinkTimeLimit;
    protected $_name = [
        'agentIconUrl' => 'agentIconUrl',
        'characterName' => 'characterName',
        'dialogueTextFlag' => 'dialogueTextFlag',
        'dialogueTipFlag' => 'dialogueTipFlag',
        'initiator' => 'initiator',
        'inputTypeList' => 'inputTypeList',
        'maxDuration' => 'maxDuration',
        'scriptDesc' => 'scriptDesc',
        'scriptName' => 'scriptName',
        'scriptRecordId' => 'scriptRecordId',
        'scriptType' => 'scriptType',
        'sparringTipContent' => 'sparringTipContent',
        'sparringTipTitle' => 'sparringTipTitle',
        'studentThinkTimeFlag' => 'studentThinkTimeFlag',
        'studentThinkTimeLimit' => 'studentThinkTimeLimit',
    ];

    public function validate()
    {
        if (\is_array($this->inputTypeList)) {
            Model::validateArray($this->inputTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIconUrl) {
            $res['agentIconUrl'] = $this->agentIconUrl;
        }

        if (null !== $this->characterName) {
            $res['characterName'] = $this->characterName;
        }

        if (null !== $this->dialogueTextFlag) {
            $res['dialogueTextFlag'] = $this->dialogueTextFlag;
        }

        if (null !== $this->dialogueTipFlag) {
            $res['dialogueTipFlag'] = $this->dialogueTipFlag;
        }

        if (null !== $this->initiator) {
            $res['initiator'] = $this->initiator;
        }

        if (null !== $this->inputTypeList) {
            if (\is_array($this->inputTypeList)) {
                $res['inputTypeList'] = [];
                $n1 = 0;
                foreach ($this->inputTypeList as $item1) {
                    $res['inputTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxDuration) {
            $res['maxDuration'] = $this->maxDuration;
        }

        if (null !== $this->scriptDesc) {
            $res['scriptDesc'] = $this->scriptDesc;
        }

        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }

        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }

        if (null !== $this->scriptType) {
            $res['scriptType'] = $this->scriptType;
        }

        if (null !== $this->sparringTipContent) {
            $res['sparringTipContent'] = $this->sparringTipContent;
        }

        if (null !== $this->sparringTipTitle) {
            $res['sparringTipTitle'] = $this->sparringTipTitle;
        }

        if (null !== $this->studentThinkTimeFlag) {
            $res['studentThinkTimeFlag'] = $this->studentThinkTimeFlag;
        }

        if (null !== $this->studentThinkTimeLimit) {
            $res['studentThinkTimeLimit'] = $this->studentThinkTimeLimit;
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
        if (isset($map['agentIconUrl'])) {
            $model->agentIconUrl = $map['agentIconUrl'];
        }

        if (isset($map['characterName'])) {
            $model->characterName = $map['characterName'];
        }

        if (isset($map['dialogueTextFlag'])) {
            $model->dialogueTextFlag = $map['dialogueTextFlag'];
        }

        if (isset($map['dialogueTipFlag'])) {
            $model->dialogueTipFlag = $map['dialogueTipFlag'];
        }

        if (isset($map['initiator'])) {
            $model->initiator = $map['initiator'];
        }

        if (isset($map['inputTypeList'])) {
            if (!empty($map['inputTypeList'])) {
                $model->inputTypeList = [];
                $n1 = 0;
                foreach ($map['inputTypeList'] as $item1) {
                    $model->inputTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['maxDuration'])) {
            $model->maxDuration = $map['maxDuration'];
        }

        if (isset($map['scriptDesc'])) {
            $model->scriptDesc = $map['scriptDesc'];
        }

        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        if (isset($map['scriptType'])) {
            $model->scriptType = $map['scriptType'];
        }

        if (isset($map['sparringTipContent'])) {
            $model->sparringTipContent = $map['sparringTipContent'];
        }

        if (isset($map['sparringTipTitle'])) {
            $model->sparringTipTitle = $map['sparringTipTitle'];
        }

        if (isset($map['studentThinkTimeFlag'])) {
            $model->studentThinkTimeFlag = $map['studentThinkTimeFlag'];
        }

        if (isset($map['studentThinkTimeLimit'])) {
            $model->studentThinkTimeLimit = $map['studentThinkTimeLimit'];
        }

        return $model;
    }
}
