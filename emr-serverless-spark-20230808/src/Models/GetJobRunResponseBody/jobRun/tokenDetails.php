<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetJobRunResponseBody\jobRun;

use AlibabaCloud\Dara\Model;

class tokenDetails extends Model
{
    /**
     * @var string
     */
    public $enableThinking;

    /**
     * @var string
     */
    public $inputModality;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $tokenRange;

    /**
     * @var string
     */
    public $tokenSource;

    /**
     * @var int
     */
    public $tokenUsed;
    protected $_name = [
        'enableThinking' => 'enableThinking',
        'inputModality' => 'inputModality',
        'modelName' => 'modelName',
        'tokenRange' => 'tokenRange',
        'tokenSource' => 'tokenSource',
        'tokenUsed' => 'tokenUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableThinking) {
            $res['enableThinking'] = $this->enableThinking;
        }

        if (null !== $this->inputModality) {
            $res['inputModality'] = $this->inputModality;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->tokenRange) {
            $res['tokenRange'] = $this->tokenRange;
        }

        if (null !== $this->tokenSource) {
            $res['tokenSource'] = $this->tokenSource;
        }

        if (null !== $this->tokenUsed) {
            $res['tokenUsed'] = $this->tokenUsed;
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
        if (isset($map['enableThinking'])) {
            $model->enableThinking = $map['enableThinking'];
        }

        if (isset($map['inputModality'])) {
            $model->inputModality = $map['inputModality'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['tokenRange'])) {
            $model->tokenRange = $map['tokenRange'];
        }

        if (isset($map['tokenSource'])) {
            $model->tokenSource = $map['tokenSource'];
        }

        if (isset($map['tokenUsed'])) {
            $model->tokenUsed = $map['tokenUsed'];
        }

        return $model;
    }
}
