<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenErrorTimesInstanceResponse\instanceErrorRank;

use AlibabaCloud\Tea\Model;

class errorRank extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $programType;
    protected $_name = [
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'owner'       => 'Owner',
        'count'       => 'Count',
        'projectId'   => 'ProjectId',
        'programType' => 'ProgramType',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('programType', $this->programType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        return $model;
    }
}
