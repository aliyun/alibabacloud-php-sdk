<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListInnerNodesRequest extends Model
{
    /**
     * @description The ID of the node group to which the inner nodes belong.
     *
     * @example liux_test_n****
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $outerNodeId;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the workspace.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return. Minimum value: 1. Maximum value: 100.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $programType;

    /**
     * @description The name of the node to which the inner nodes belong.
     *
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description The environment in which the node is run. Valid values: DEV and PROD. Default value: PROD.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'nodeName'    => 'NodeName',
        'outerNodeId' => 'OuterNodeId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'programType' => 'ProgramType',
        'projectEnv'  => 'ProjectEnv',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->outerNodeId) {
            $res['OuterNodeId'] = $this->outerNodeId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInnerNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OuterNodeId'])) {
            $model->outerNodeId = $map['OuterNodeId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
