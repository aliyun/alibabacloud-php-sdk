<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceErrorRankResponseBody\instanceErrorRank;

use AlibabaCloud\Tea\Model;

class errorRank extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $prgType;
    protected $_name = [
        'owner'     => 'Owner',
        'nodeName'  => 'NodeName',
        'projectId' => 'ProjectId',
        'nodeId'    => 'NodeId',
        'count'     => 'Count',
        'prgType'   => 'PrgType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
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
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
        }

        return $model;
    }
}
