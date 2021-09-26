<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowResponseBody\parentFlowList;

use AlibabaCloud\Tea\Model;

class parentFlow extends Model
{
    /**
     * @var string
     */
    public $parentFlowName;

    /**
     * @var string
     */
    public $parentFlowId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'parentFlowName' => 'ParentFlowName',
        'parentFlowId'   => 'ParentFlowId',
        'projectName'    => 'ProjectName',
        'projectId'      => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentFlowName) {
            $res['ParentFlowName'] = $this->parentFlowName;
        }
        if (null !== $this->parentFlowId) {
            $res['ParentFlowId'] = $this->parentFlowId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ParentFlowName'])) {
            $model->parentFlowName = $map['ParentFlowName'];
        }
        if (isset($map['ParentFlowId'])) {
            $model->parentFlowId = $map['ParentFlowId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
