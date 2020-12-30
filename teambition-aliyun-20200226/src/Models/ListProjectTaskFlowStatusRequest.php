<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class ListProjectTaskFlowStatusRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $taskFlowId;
    protected $_name = [
        'orgId'      => 'OrgId',
        'taskFlowId' => 'TaskFlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->taskFlowId) {
            $res['TaskFlowId'] = $this->taskFlowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectTaskFlowStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['TaskFlowId'])) {
            $model->taskFlowId = $map['TaskFlowId'];
        }

        return $model;
    }
}
