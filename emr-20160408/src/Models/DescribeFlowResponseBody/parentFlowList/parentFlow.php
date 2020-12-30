<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeFlowResponseBody\parentFlowList;

use AlibabaCloud\Tea\Model;

class parentFlow extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $parentFlowName;

    /**
     * @var string
     */
    public $parentFlowId;
    protected $_name = [
        'projectName'    => 'ProjectName',
        'projectId'      => 'ProjectId',
        'parentFlowName' => 'ParentFlowName',
        'parentFlowId'   => 'ParentFlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->parentFlowName) {
            $res['ParentFlowName'] = $this->parentFlowName;
        }
        if (null !== $this->parentFlowId) {
            $res['ParentFlowId'] = $this->parentFlowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parentFlow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ParentFlowName'])) {
            $model->parentFlowName = $map['ParentFlowName'];
        }
        if (isset($map['ParentFlowId'])) {
            $model->parentFlowId = $map['ParentFlowId'];
        }

        return $model;
    }
}
