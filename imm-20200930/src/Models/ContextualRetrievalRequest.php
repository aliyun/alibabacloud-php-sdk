<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ContextualRetrievalRequest extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var ContextualMessage[]
     */
    public $messages;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $recallOnly;

    /**
     * @var string[]
     */
    public $smartClusterIds;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'messages' => 'Messages',
        'projectName' => 'ProjectName',
        'recallOnly' => 'RecallOnly',
        'smartClusterIds' => 'SmartClusterIds',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->smartClusterIds)) {
            Model::validateArray($this->smartClusterIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->smartClusterIds)) {
                $res['SmartClusterIds'] = [];
                $n1 = 0;
                foreach ($this->smartClusterIds as $item1) {
                    $res['SmartClusterIds'][$n1++] = $item1;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1++] = ContextualMessage::fromMap($item1);
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
                $model->smartClusterIds = [];
                $n1 = 0;
                foreach ($map['SmartClusterIds'] as $item1) {
                    $model->smartClusterIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
