<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\agentContext\bizContext\multimodalMediaSelection;
use AlibabaCloud\Tea\Model;

class bizContext extends Model
{
    /**
     * @var string
     */
    public $askUser;

    /**
     * @var string[]
     */
    public $askUserKeywords;

    /**
     * @var string
     */
    public $currentStep;

    /**
     * @var multimodalMediaSelection
     */
    public $multimodalMediaSelection;

    /**
     * @var string
     */
    public $nextStep;

    /**
     * @var bool
     */
    public $skipCurrentSupplement;

    /**
     * @var string
     */
    public $supplementDataType;

    /**
     * @var bool
     */
    public $supplementEnable;

    /**
     * @var string
     */
    public $userBack;

    /**
     * @var string[]
     */
    public $userBackKeywords;
    protected $_name = [
        'askUser' => 'AskUser',
        'askUserKeywords' => 'AskUserKeywords',
        'currentStep' => 'CurrentStep',
        'multimodalMediaSelection' => 'MultimodalMediaSelection',
        'nextStep' => 'NextStep',
        'skipCurrentSupplement' => 'SkipCurrentSupplement',
        'supplementDataType' => 'SupplementDataType',
        'supplementEnable' => 'SupplementEnable',
        'userBack' => 'UserBack',
        'userBackKeywords' => 'UserBackKeywords',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->askUser) {
            $res['AskUser'] = $this->askUser;
        }
        if (null !== $this->askUserKeywords) {
            $res['AskUserKeywords'] = $this->askUserKeywords;
        }
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }
        if (null !== $this->multimodalMediaSelection) {
            $res['MultimodalMediaSelection'] = null !== $this->multimodalMediaSelection ? $this->multimodalMediaSelection->toMap() : null;
        }
        if (null !== $this->nextStep) {
            $res['NextStep'] = $this->nextStep;
        }
        if (null !== $this->skipCurrentSupplement) {
            $res['SkipCurrentSupplement'] = $this->skipCurrentSupplement;
        }
        if (null !== $this->supplementDataType) {
            $res['SupplementDataType'] = $this->supplementDataType;
        }
        if (null !== $this->supplementEnable) {
            $res['SupplementEnable'] = $this->supplementEnable;
        }
        if (null !== $this->userBack) {
            $res['UserBack'] = $this->userBack;
        }
        if (null !== $this->userBackKeywords) {
            $res['UserBackKeywords'] = $this->userBackKeywords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AskUser'])) {
            $model->askUser = $map['AskUser'];
        }
        if (isset($map['AskUserKeywords'])) {
            if (!empty($map['AskUserKeywords'])) {
                $model->askUserKeywords = $map['AskUserKeywords'];
            }
        }
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }
        if (isset($map['MultimodalMediaSelection'])) {
            $model->multimodalMediaSelection = multimodalMediaSelection::fromMap($map['MultimodalMediaSelection']);
        }
        if (isset($map['NextStep'])) {
            $model->nextStep = $map['NextStep'];
        }
        if (isset($map['SkipCurrentSupplement'])) {
            $model->skipCurrentSupplement = $map['SkipCurrentSupplement'];
        }
        if (isset($map['SupplementDataType'])) {
            $model->supplementDataType = $map['SupplementDataType'];
        }
        if (isset($map['SupplementEnable'])) {
            $model->supplementEnable = $map['SupplementEnable'];
        }
        if (isset($map['UserBack'])) {
            $model->userBack = $map['UserBack'];
        }
        if (isset($map['UserBackKeywords'])) {
            if (!empty($map['UserBackKeywords'])) {
                $model->userBackKeywords = $map['UserBackKeywords'];
            }
        }

        return $model;
    }
}
