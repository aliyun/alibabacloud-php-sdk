<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteManualNodeRequest\executeCommand\paramList;
use AlibabaCloud\Tea\Model;

class executeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-05-07
     *
     * @var string
     */
    public $endBizDate;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $flowName;

    /**
     * @description This parameter is required.
     *
     * @example n_12132
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var paramList[]
     */
    public $paramList;

    /**
     * @description This parameter is required.
     *
     * @example 123324
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 2024-05-01
     *
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'endBizDate'   => 'EndBizDate',
        'flowName'     => 'FlowName',
        'nodeId'       => 'NodeId',
        'paramList'    => 'ParamList',
        'projectId'    => 'ProjectId',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->paramList) {
            $res['ParamList'] = [];
            if (null !== $this->paramList && \is_array($this->paramList)) {
                $n = 0;
                foreach ($this->paramList as $item) {
                    $res['ParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ParamList'])) {
            if (!empty($map['ParamList'])) {
                $model->paramList = [];
                $n                = 0;
                foreach ($map['ParamList'] as $item) {
                    $model->paramList[$n++] = null !== $item ? paramList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
