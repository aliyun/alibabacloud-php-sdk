<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListRecentExperimentsResponseBody;

use AlibabaCloud\Dara\Model;

class experiments extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var int
     */
    public $modifyCnt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recentGmtModifiedTime;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'description' => 'Description',
        'experimentId' => 'ExperimentId',
        'modifyCnt' => 'ModifyCnt',
        'name' => 'Name',
        'recentGmtModifiedTime' => 'RecentGmtModifiedTime',
        'source' => 'Source',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->modifyCnt) {
            $res['ModifyCnt'] = $this->modifyCnt;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recentGmtModifiedTime) {
            $res['RecentGmtModifiedTime'] = $this->recentGmtModifiedTime;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['ModifyCnt'])) {
            $model->modifyCnt = $map['ModifyCnt'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecentGmtModifiedTime'])) {
            $model->recentGmtModifiedTime = $map['RecentGmtModifiedTime'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
