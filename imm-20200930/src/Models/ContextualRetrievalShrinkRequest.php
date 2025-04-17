<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ContextualRetrievalShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $messagesShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $recallOnly;

    /**
     * @var string
     */
    public $smartClusterIdsShrink;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'messagesShrink' => 'Messages',
        'projectName' => 'ProjectName',
        'recallOnly' => 'RecallOnly',
        'smartClusterIdsShrink' => 'SmartClusterIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->messagesShrink) {
            $res['Messages'] = $this->messagesShrink;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->recallOnly) {
            $res['RecallOnly'] = $this->recallOnly;
        }

        if (null !== $this->smartClusterIdsShrink) {
            $res['SmartClusterIds'] = $this->smartClusterIdsShrink;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Messages'])) {
            $model->messagesShrink = $map['Messages'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RecallOnly'])) {
            $model->recallOnly = $map['RecallOnly'];
        }

        if (isset($map['SmartClusterIds'])) {
            $model->smartClusterIdsShrink = $map['SmartClusterIds'];
        }

        return $model;
    }
}
