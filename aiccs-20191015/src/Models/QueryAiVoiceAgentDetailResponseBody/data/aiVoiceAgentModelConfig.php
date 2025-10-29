<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\childTaskList;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\customExceptionList;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\mainPurpose;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\outputTagConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailResponseBody\data\aiVoiceAgentModelConfig\phoneTagConfig;

class aiVoiceAgentModelConfig extends Model
{
    /**
     * @var string
     */
    public $basicTaskDescription;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var childTaskList[]
     */
    public $childTaskList;

    /**
     * @var bool
     */
    public $customExceptionEnable;

    /**
     * @var string
     */
    public $customExceptionFileId;

    /**
     * @var string
     */
    public $customExceptionFileName;

    /**
     * @var customExceptionList[]
     */
    public $customExceptionList;

    /**
     * @var string
     */
    public $customExceptionUrlPath;

    /**
     * @var int
     */
    public $customExceptionVoiceStyle;

    /**
     * @var string
     */
    public $flowDesc;

    /**
     * @var string[]
     */
    public $knowledgeDocIdList;

    /**
     * @var string[]
     */
    public $knowledgeDocNameList;

    /**
     * @var string[]
     */
    public $knowledgeDocOriginalNameList;

    /**
     * @var bool
     */
    public $knowledgeEnable;

    /**
     * @var string
     */
    public $knowledgeId;

    /**
     * @var mainPurpose
     */
    public $mainPurpose;

    /**
     * @var outputTagConfig[]
     */
    public $outputTagConfig;

    /**
     * @var phoneTagConfig[]
     */
    public $phoneTagConfig;

    /**
     * @var string
     */
    public $prologue;

    /**
     * @var string
     */
    public $sysRole;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $userRole;
    protected $_name = [
        'basicTaskDescription' => 'BasicTaskDescription',
        'businessType' => 'BusinessType',
        'childTaskList' => 'ChildTaskList',
        'customExceptionEnable' => 'CustomExceptionEnable',
        'customExceptionFileId' => 'CustomExceptionFileId',
        'customExceptionFileName' => 'CustomExceptionFileName',
        'customExceptionList' => 'CustomExceptionList',
        'customExceptionUrlPath' => 'CustomExceptionUrlPath',
        'customExceptionVoiceStyle' => 'CustomExceptionVoiceStyle',
        'flowDesc' => 'FlowDesc',
        'knowledgeDocIdList' => 'KnowledgeDocIdList',
        'knowledgeDocNameList' => 'KnowledgeDocNameList',
        'knowledgeDocOriginalNameList' => 'KnowledgeDocOriginalNameList',
        'knowledgeEnable' => 'KnowledgeEnable',
        'knowledgeId' => 'KnowledgeId',
        'mainPurpose' => 'MainPurpose',
        'outputTagConfig' => 'OutputTagConfig',
        'phoneTagConfig' => 'PhoneTagConfig',
        'prologue' => 'Prologue',
        'sysRole' => 'SysRole',
        'taskType' => 'TaskType',
        'userRole' => 'UserRole',
    ];

    public function validate()
    {
        if (\is_array($this->childTaskList)) {
            Model::validateArray($this->childTaskList);
        }
        if (\is_array($this->customExceptionList)) {
            Model::validateArray($this->customExceptionList);
        }
        if (\is_array($this->knowledgeDocIdList)) {
            Model::validateArray($this->knowledgeDocIdList);
        }
        if (\is_array($this->knowledgeDocNameList)) {
            Model::validateArray($this->knowledgeDocNameList);
        }
        if (\is_array($this->knowledgeDocOriginalNameList)) {
            Model::validateArray($this->knowledgeDocOriginalNameList);
        }
        if (null !== $this->mainPurpose) {
            $this->mainPurpose->validate();
        }
        if (\is_array($this->outputTagConfig)) {
            Model::validateArray($this->outputTagConfig);
        }
        if (\is_array($this->phoneTagConfig)) {
            Model::validateArray($this->phoneTagConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicTaskDescription) {
            $res['BasicTaskDescription'] = $this->basicTaskDescription;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->childTaskList) {
            if (\is_array($this->childTaskList)) {
                $res['ChildTaskList'] = [];
                $n1 = 0;
                foreach ($this->childTaskList as $item1) {
                    $res['ChildTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customExceptionEnable) {
            $res['CustomExceptionEnable'] = $this->customExceptionEnable;
        }

        if (null !== $this->customExceptionFileId) {
            $res['CustomExceptionFileId'] = $this->customExceptionFileId;
        }

        if (null !== $this->customExceptionFileName) {
            $res['CustomExceptionFileName'] = $this->customExceptionFileName;
        }

        if (null !== $this->customExceptionList) {
            if (\is_array($this->customExceptionList)) {
                $res['CustomExceptionList'] = [];
                $n1 = 0;
                foreach ($this->customExceptionList as $item1) {
                    $res['CustomExceptionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customExceptionUrlPath) {
            $res['CustomExceptionUrlPath'] = $this->customExceptionUrlPath;
        }

        if (null !== $this->customExceptionVoiceStyle) {
            $res['CustomExceptionVoiceStyle'] = $this->customExceptionVoiceStyle;
        }

        if (null !== $this->flowDesc) {
            $res['FlowDesc'] = $this->flowDesc;
        }

        if (null !== $this->knowledgeDocIdList) {
            if (\is_array($this->knowledgeDocIdList)) {
                $res['KnowledgeDocIdList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeDocIdList as $item1) {
                    $res['KnowledgeDocIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeDocNameList) {
            if (\is_array($this->knowledgeDocNameList)) {
                $res['KnowledgeDocNameList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeDocNameList as $item1) {
                    $res['KnowledgeDocNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeDocOriginalNameList) {
            if (\is_array($this->knowledgeDocOriginalNameList)) {
                $res['KnowledgeDocOriginalNameList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeDocOriginalNameList as $item1) {
                    $res['KnowledgeDocOriginalNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeEnable) {
            $res['KnowledgeEnable'] = $this->knowledgeEnable;
        }

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->mainPurpose) {
            $res['MainPurpose'] = null !== $this->mainPurpose ? $this->mainPurpose->toArray($noStream) : $this->mainPurpose;
        }

        if (null !== $this->outputTagConfig) {
            if (\is_array($this->outputTagConfig)) {
                $res['OutputTagConfig'] = [];
                $n1 = 0;
                foreach ($this->outputTagConfig as $item1) {
                    $res['OutputTagConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->phoneTagConfig) {
            if (\is_array($this->phoneTagConfig)) {
                $res['PhoneTagConfig'] = [];
                $n1 = 0;
                foreach ($this->phoneTagConfig as $item1) {
                    $res['PhoneTagConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prologue) {
            $res['Prologue'] = $this->prologue;
        }

        if (null !== $this->sysRole) {
            $res['SysRole'] = $this->sysRole;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->userRole) {
            $res['UserRole'] = $this->userRole;
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
        if (isset($map['BasicTaskDescription'])) {
            $model->basicTaskDescription = $map['BasicTaskDescription'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ChildTaskList'])) {
            if (!empty($map['ChildTaskList'])) {
                $model->childTaskList = [];
                $n1 = 0;
                foreach ($map['ChildTaskList'] as $item1) {
                    $model->childTaskList[$n1] = childTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomExceptionEnable'])) {
            $model->customExceptionEnable = $map['CustomExceptionEnable'];
        }

        if (isset($map['CustomExceptionFileId'])) {
            $model->customExceptionFileId = $map['CustomExceptionFileId'];
        }

        if (isset($map['CustomExceptionFileName'])) {
            $model->customExceptionFileName = $map['CustomExceptionFileName'];
        }

        if (isset($map['CustomExceptionList'])) {
            if (!empty($map['CustomExceptionList'])) {
                $model->customExceptionList = [];
                $n1 = 0;
                foreach ($map['CustomExceptionList'] as $item1) {
                    $model->customExceptionList[$n1] = customExceptionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CustomExceptionUrlPath'])) {
            $model->customExceptionUrlPath = $map['CustomExceptionUrlPath'];
        }

        if (isset($map['CustomExceptionVoiceStyle'])) {
            $model->customExceptionVoiceStyle = $map['CustomExceptionVoiceStyle'];
        }

        if (isset($map['FlowDesc'])) {
            $model->flowDesc = $map['FlowDesc'];
        }

        if (isset($map['KnowledgeDocIdList'])) {
            if (!empty($map['KnowledgeDocIdList'])) {
                $model->knowledgeDocIdList = [];
                $n1 = 0;
                foreach ($map['KnowledgeDocIdList'] as $item1) {
                    $model->knowledgeDocIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeDocNameList'])) {
            if (!empty($map['KnowledgeDocNameList'])) {
                $model->knowledgeDocNameList = [];
                $n1 = 0;
                foreach ($map['KnowledgeDocNameList'] as $item1) {
                    $model->knowledgeDocNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeDocOriginalNameList'])) {
            if (!empty($map['KnowledgeDocOriginalNameList'])) {
                $model->knowledgeDocOriginalNameList = [];
                $n1 = 0;
                foreach ($map['KnowledgeDocOriginalNameList'] as $item1) {
                    $model->knowledgeDocOriginalNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KnowledgeEnable'])) {
            $model->knowledgeEnable = $map['KnowledgeEnable'];
        }

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['MainPurpose'])) {
            $model->mainPurpose = mainPurpose::fromMap($map['MainPurpose']);
        }

        if (isset($map['OutputTagConfig'])) {
            if (!empty($map['OutputTagConfig'])) {
                $model->outputTagConfig = [];
                $n1 = 0;
                foreach ($map['OutputTagConfig'] as $item1) {
                    $model->outputTagConfig[$n1] = outputTagConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PhoneTagConfig'])) {
            if (!empty($map['PhoneTagConfig'])) {
                $model->phoneTagConfig = [];
                $n1 = 0;
                foreach ($map['PhoneTagConfig'] as $item1) {
                    $model->phoneTagConfig[$n1] = phoneTagConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Prologue'])) {
            $model->prologue = $map['Prologue'];
        }

        if (isset($map['SysRole'])) {
            $model->sysRole = $map['SysRole'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['UserRole'])) {
            $model->userRole = $map['UserRole'];
        }

        return $model;
    }
}
