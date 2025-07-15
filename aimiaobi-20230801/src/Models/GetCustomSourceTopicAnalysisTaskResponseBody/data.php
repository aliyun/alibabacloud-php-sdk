<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomSourceTopicAnalysisTaskResponseBody\data\clusterResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @var clusterResults[]
     */
    public $clusterResults;

    /**
     * @example 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 8
     *
     * @var int
     */
    public $maxClusteredTopicNewsSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $parsedNewsSize;

    /**
     * @example SUCCESSED
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->clusterResults) {
            $res['ClusterResults'] = [];
            if (null !== $this->clusterResults && \is_array($this->clusterResults)) {
                $n = 0;
                foreach ($this->clusterResults as $item) {
                    $res['ClusterResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['usages'] = $this->usages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['ClusterResults'])) {
            if (!empty($map['ClusterResults'])) {
                $model->clusterResults = [];
                $n = 0;
                foreach ($map['ClusterResults'] as $item) {
                    $model->clusterResults[$n++] = null !== $item ? clusterResults::fromMap($item) : $item;
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
            $model->usages = $map['usages'];
        }

        return $model;
    }
}
