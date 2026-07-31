<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\modelConfig\userPromptParams;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\modelConfig\userQueryParams;

class modelConfig extends Model
{
    /**
     * @var bool
     */
    public $enableIntentRecognize;

    /**
     * @var bool
     */
    public $enableTransition;

    /**
     * @var int
     */
    public $historyLimit;

    /**
     * @var bool
     */
    public $intentOnlySwitch;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var bool
     */
    public $openMemory;

    /**
     * @var bool
     */
    public $openWebSearch;

    /**
     * @var string
     */
    public $searchModel;

    /**
     * @var string
     */
    public $searchStrategy;

    /**
     * @var string
     */
    public $textModal;

    /**
     * @var userPromptParams[]
     */
    public $userPromptParams;

    /**
     * @var userQueryParams[]
     */
    public $userQueryParams;
    protected $_name = [
        'enableIntentRecognize' => 'EnableIntentRecognize',
        'enableTransition' => 'EnableTransition',
        'historyLimit' => 'HistoryLimit',
        'intentOnlySwitch' => 'IntentOnlySwitch',
        'modelType' => 'ModelType',
        'openMemory' => 'OpenMemory',
        'openWebSearch' => 'OpenWebSearch',
        'searchModel' => 'SearchModel',
        'searchStrategy' => 'SearchStrategy',
        'textModal' => 'TextModal',
        'userPromptParams' => 'UserPromptParams',
        'userQueryParams' => 'userQueryParams',
    ];

    public function validate()
    {
        if (\is_array($this->userPromptParams)) {
            Model::validateArray($this->userPromptParams);
        }
        if (\is_array($this->userQueryParams)) {
            Model::validateArray($this->userQueryParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableIntentRecognize) {
            $res['EnableIntentRecognize'] = $this->enableIntentRecognize;
        }

        if (null !== $this->enableTransition) {
            $res['EnableTransition'] = $this->enableTransition;
        }

        if (null !== $this->historyLimit) {
            $res['HistoryLimit'] = $this->historyLimit;
        }

        if (null !== $this->intentOnlySwitch) {
            $res['IntentOnlySwitch'] = $this->intentOnlySwitch;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        if (null !== $this->openMemory) {
            $res['OpenMemory'] = $this->openMemory;
        }

        if (null !== $this->openWebSearch) {
            $res['OpenWebSearch'] = $this->openWebSearch;
        }

        if (null !== $this->searchModel) {
            $res['SearchModel'] = $this->searchModel;
        }

        if (null !== $this->searchStrategy) {
            $res['SearchStrategy'] = $this->searchStrategy;
        }

        if (null !== $this->textModal) {
            $res['TextModal'] = $this->textModal;
        }

        if (null !== $this->userPromptParams) {
            if (\is_array($this->userPromptParams)) {
                $res['UserPromptParams'] = [];
                $n1 = 0;
                foreach ($this->userPromptParams as $item1) {
                    $res['UserPromptParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userQueryParams) {
            if (\is_array($this->userQueryParams)) {
                $res['userQueryParams'] = [];
                $n1 = 0;
                foreach ($this->userQueryParams as $item1) {
                    $res['userQueryParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EnableIntentRecognize'])) {
            $model->enableIntentRecognize = $map['EnableIntentRecognize'];
        }

        if (isset($map['EnableTransition'])) {
            $model->enableTransition = $map['EnableTransition'];
        }

        if (isset($map['HistoryLimit'])) {
            $model->historyLimit = $map['HistoryLimit'];
        }

        if (isset($map['IntentOnlySwitch'])) {
            $model->intentOnlySwitch = $map['IntentOnlySwitch'];
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        if (isset($map['OpenMemory'])) {
            $model->openMemory = $map['OpenMemory'];
        }

        if (isset($map['OpenWebSearch'])) {
            $model->openWebSearch = $map['OpenWebSearch'];
        }

        if (isset($map['SearchModel'])) {
            $model->searchModel = $map['SearchModel'];
        }

        if (isset($map['SearchStrategy'])) {
            $model->searchStrategy = $map['SearchStrategy'];
        }

        if (isset($map['TextModal'])) {
            $model->textModal = $map['TextModal'];
        }

        if (isset($map['UserPromptParams'])) {
            if (!empty($map['UserPromptParams'])) {
                $model->userPromptParams = [];
                $n1 = 0;
                foreach ($map['UserPromptParams'] as $item1) {
                    $model->userPromptParams[$n1] = userPromptParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['userQueryParams'])) {
            if (!empty($map['userQueryParams'])) {
                $model->userQueryParams = [];
                $n1 = 0;
                foreach ($map['userQueryParams'] as $item1) {
                    $model->userQueryParams[$n1] = userQueryParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
