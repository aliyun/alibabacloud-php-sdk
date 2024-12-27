<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ContextualRetrievalRequest extends Model
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
     * @var ContextualMessage[]
     */
    public $messages;

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
     * @var string[]
     */
    public $smartClusterIds;
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'messages'        => 'Messages',
        'projectName'     => 'ProjectName',
        'recallOnly'      => 'RecallOnly',
        'smartClusterIds' => 'SmartClusterIds',
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
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->recallOnly) {
            $res['RecallOnly'] = $this->recallOnly;
        }
        if (null !== $this->smartClusterIds) {
            $res['SmartClusterIds'] = $this->smartClusterIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContextualRetrievalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? ContextualMessage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RecallOnly'])) {
            $model->recallOnly = $map['RecallOnly'];
        }
        if (isset($map['SmartClusterIds'])) {
            if (!empty($map['SmartClusterIds'])) {
                $model->smartClusterIds = $map['SmartClusterIds'];
            }
        }

        return $model;
    }
}
