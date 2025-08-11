<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DataInterpretationRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var bool
     */
    public $promptForceOverride;

    /**
     * @var string
     */
    public $userPrompt;

    /**
     * @var string
     */
    public $userQuestion;
    protected $_name = [
        'data' => 'Data',
        'modelCode' => 'ModelCode',
        'promptForceOverride' => 'PromptForceOverride',
        'userPrompt' => 'UserPrompt',
        'userQuestion' => 'UserQuestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->promptForceOverride) {
            $res['PromptForceOverride'] = $this->promptForceOverride;
        }

        if (null !== $this->userPrompt) {
            $res['UserPrompt'] = $this->userPrompt;
        }

        if (null !== $this->userQuestion) {
            $res['UserQuestion'] = $this->userQuestion;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['PromptForceOverride'])) {
            $model->promptForceOverride = $map['PromptForceOverride'];
        }

        if (isset($map['UserPrompt'])) {
            $model->userPrompt = $map['UserPrompt'];
        }

        if (isset($map['UserQuestion'])) {
            $model->userQuestion = $map['UserQuestion'];
        }

        return $model;
    }
}
