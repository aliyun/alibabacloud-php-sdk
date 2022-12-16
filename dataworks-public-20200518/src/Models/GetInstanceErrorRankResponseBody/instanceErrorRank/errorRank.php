<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponseBody\instanceErrorRank;

use AlibabaCloud\Tea\Model;

class errorRank extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $count;

    /**
     * @example 9527
     *
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example 952795279527
     *
     * @var string
     */
    public $owner;

    /**
     * @example 10
     *
     * @var int
     */
    public $prgType;

    /**
     * @example 9527
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'count'     => 'Count',
        'nodeId'    => 'NodeId',
        'nodeName'  => 'NodeName',
        'owner'     => 'Owner',
        'prgType'   => 'PrgType',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
