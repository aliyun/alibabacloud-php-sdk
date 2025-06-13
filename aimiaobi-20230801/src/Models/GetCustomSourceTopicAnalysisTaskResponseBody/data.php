<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data\clusterResults;

class data extends Model
{
    /**
     * @var int
     */
    public $clusterCount;

    /**
     * @var clusterResults[]
     */
    public $clusterResults;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $maxClusteredTopicNewsSize;

    /**
     * @var int
     */
    public $parsedNewsSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterCount' => 'ClusterCount',
        'clusterResults' => 'ClusterResults',
        'errorMessage' => 'ErrorMessage',
        'maxClusteredTopicNewsSize' => 'MaxClusteredTopicNewsSize',
        'parsedNewsSize' => 'ParsedNewsSize',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->clusterResults)) {
            Model::validateArray($this->clusterResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }

        if (null !== $this->clusterResults) {
            if (\is_array($this->clusterResults)) {
                $res['ClusterResults'] = [];
                $n1 = 0;
                foreach ($this->clusterResults as $item1) {
                    $res['ClusterResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->maxClusteredTopicNewsSize) {
            $res['MaxClusteredTopicNewsSize'] = $this->maxClusteredTopicNewsSize;
        }

        if (null !== $this->parsedNewsSize) {
            $res['ParsedNewsSize'] = $this->parsedNewsSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }

        if (isset($map['ClusterResults'])) {
            if (!empty($map['ClusterResults'])) {
                $model->clusterResults = [];
                $n1 = 0;
                foreach ($map['ClusterResults'] as $item1) {
                    $model->clusterResults[$n1] = clusterResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['MaxClusteredTopicNewsSize'])) {
            $model->maxClusteredTopicNewsSize = $map['MaxClusteredTopicNewsSize'];
        }

        if (isset($map['ParsedNewsSize'])) {
            $model->parsedNewsSize = $map['ParsedNewsSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
