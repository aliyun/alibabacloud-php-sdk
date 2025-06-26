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

    /**
     * @var int
     */
    public $rt;

    /**
     * @var int[]
     */
    public $usages;
    protected $_name = [
        'clusterCount' => 'ClusterCount',
        'clusterResults' => 'ClusterResults',
        'errorMessage' => 'ErrorMessage',
        'maxClusteredTopicNewsSize' => 'MaxClusteredTopicNewsSize',
        'parsedNewsSize' => 'ParsedNewsSize',
        'status' => 'Status',
        'rt' => 'rt',
        'usages' => 'usages',
    ];

    public function validate()
    {
        if (\is_array($this->clusterResults)) {
            Model::validateArray($this->clusterResults);
        }
        if (\is_array($this->usages)) {
            Model::validateArray($this->usages);
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

        if (null !== $this->rt) {
            $res['rt'] = $this->rt;
        }

        if (null !== $this->usages) {
            if (\is_array($this->usages)) {
                $res['usages'] = [];
                foreach ($this->usages as $key1 => $value1) {
                    $res['usages'][$key1] = $value1;
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

        if (isset($map['rt'])) {
            $model->rt = $map['rt'];
        }

        if (isset($map['usages'])) {
            if (!empty($map['usages'])) {
                $model->usages = [];
                foreach ($map['usages'] as $key1 => $value1) {
                    $model->usages[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
