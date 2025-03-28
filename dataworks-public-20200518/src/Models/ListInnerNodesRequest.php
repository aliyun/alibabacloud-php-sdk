<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListInnerNodesRequest extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $outerNodeId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $programType;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'nodeName' => 'NodeName',
        'outerNodeId' => 'OuterNodeId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'programType' => 'ProgramType',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
