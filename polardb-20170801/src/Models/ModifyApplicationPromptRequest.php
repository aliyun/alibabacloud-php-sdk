<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyApplicationPromptRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

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
    public $promptValue;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'promptId' => 'PromptId',
        'promptName' => 'PromptName',
        'promptValue' => 'PromptValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
        }

        if (null !== $this->promptName) {
            $res['PromptName'] = $this->promptName;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }

        if (isset($map['PromptName'])) {
            $model->promptName = $map['PromptName'];
        }

        if (isset($map['PromptValue'])) {
            $model->promptValue = $map['PromptValue'];
        }

        return $model;
    }
}
