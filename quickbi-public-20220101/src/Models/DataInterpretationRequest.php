<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DataInterpretationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DataInterpretationRequest
     */
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
