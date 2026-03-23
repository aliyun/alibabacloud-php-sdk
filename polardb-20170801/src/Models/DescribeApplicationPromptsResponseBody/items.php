<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationPromptsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $promptEnabled;

    /**
     * @var string
     */
    public $promptId;

    /**
     * @var string
     */
    public $promptName;

    /**
     * @var string
     */
    public $promptType;

    /**
     * @var string
     */
    public $promptValue;
    protected $_name = [
        'promptEnabled' => 'PromptEnabled',
        'promptId' => 'PromptId',
        'promptName' => 'PromptName',
        'promptType' => 'PromptType',
        'promptValue' => 'PromptValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promptEnabled) {
            $res['PromptEnabled'] = $this->promptEnabled;
        }

        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
        }

        if (null !== $this->promptName) {
            $res['PromptName'] = $this->promptName;
        }

        if (null !== $this->promptType) {
            $res['PromptType'] = $this->promptType;
        }

        if (null !== $this->promptValue) {
            $res['PromptValue'] = $this->promptValue;
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
        if (isset($map['PromptEnabled'])) {
            $model->promptEnabled = $map['PromptEnabled'];
        }

        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }

        if (isset($map['PromptName'])) {
            $model->promptName = $map['PromptName'];
        }

        if (isset($map['PromptType'])) {
            $model->promptType = $map['PromptType'];
        }

        if (isset($map['PromptValue'])) {
            $model->promptValue = $map['PromptValue'];
        }

        return $model;
    }
}
