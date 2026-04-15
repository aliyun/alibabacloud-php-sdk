<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ListFlowsRequest extends Model
{
    /**
     * @var string
     */
    public $flowName;

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
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'flowName' => 'flowName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'workspaceId' => 'workspaceId',
        'workspaceIds' => 'workspaceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowName) {
            $res['flowName'] = $this->flowName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceIds) {
            $res['workspaceIds'] = $this->workspaceIds;
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
        if (isset($map['flowName'])) {
            $model->flowName = $map['flowName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        if (isset($map['workspaceIds'])) {
            $model->workspaceIds = $map['workspaceIds'];
        }

        return $model;
    }
}
