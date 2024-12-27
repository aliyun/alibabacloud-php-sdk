<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ContextualRetrievalShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $messagesShrink;

    /**
     * @description This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example false
     *
     * @var bool
     */
    public $recallOnly;

    /**
     * @var string
     */
    public $smartClusterIdsShrink;
    protected $_name = [
        'datasetName'           => 'DatasetName',
        'messagesShrink'        => 'Messages',
        'projectName'           => 'ProjectName',
        'recallOnly'            => 'RecallOnly',
        'smartClusterIdsShrink' => 'SmartClusterIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ContextualRetrievalShrinkRequest
     */
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
