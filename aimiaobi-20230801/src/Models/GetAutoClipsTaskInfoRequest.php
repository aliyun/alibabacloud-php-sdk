<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class GetAutoClipsTaskInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $showAnalysisResults;

    /**
     * @var bool
     */
    public $showResourceInfo;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'showAnalysisResults' => 'ShowAnalysisResults',
        'showResourceInfo' => 'ShowResourceInfo',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->showAnalysisResults) {
            $res['ShowAnalysisResults'] = $this->showAnalysisResults;
        }

        if (null !== $this->showResourceInfo) {
            $res['ShowResourceInfo'] = $this->showResourceInfo;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ShowAnalysisResults'])) {
            $model->showAnalysisResults = $map['ShowAnalysisResults'];
        }

        if (isset($map['ShowResourceInfo'])) {
            $model->showResourceInfo = $map['ShowResourceInfo'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
