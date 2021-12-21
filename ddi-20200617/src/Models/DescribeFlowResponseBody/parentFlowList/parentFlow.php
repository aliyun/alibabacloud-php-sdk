<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponseBody\parentFlowList;

use AlibabaCloud\Tea\Model;

class parentFlow extends Model
{
    /**
     * @var string
     */
    public $parentFlowId;

    /**
     * @var string
     */
    public $parentFlowName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'parentFlowId'   => 'ParentFlowId',
        'parentFlowName' => 'ParentFlowName',
        'projectId'      => 'ProjectId',
        'projectName'    => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentFlowId) {
            $res['ParentFlowId'] = $this->parentFlowId;
        }
        if (null !== $this->parentFlowName) {
            $res['ParentFlowName'] = $this->parentFlowName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['ParentFlowId'])) {
            $model->parentFlowId = $map['ParentFlowId'];
        }
        if (isset($map['ParentFlowName'])) {
            $model->parentFlowName = $map['ParentFlowName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
