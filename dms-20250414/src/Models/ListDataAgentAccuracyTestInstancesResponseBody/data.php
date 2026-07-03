<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentAccuracyTestInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accuracyTestInsId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $maxConcurrent;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $needDelete;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accuracyTestInsId' => 'AccuracyTestInsId',
        'agentId' => 'AgentId',
        'creator' => 'Creator',
        'fileId' => 'FileId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'language' => 'Language',
        'maxConcurrent' => 'MaxConcurrent',
        'mode' => 'Mode',
        'name' => 'Name',
        'needDelete' => 'NeedDelete',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestInsId) {
            $res['AccuracyTestInsId'] = $this->accuracyTestInsId;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->maxConcurrent) {
            $res['MaxConcurrent'] = $this->maxConcurrent;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->needDelete) {
            $res['NeedDelete'] = $this->needDelete;
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
        if (isset($map['AccuracyTestInsId'])) {
            $model->accuracyTestInsId = $map['AccuracyTestInsId'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MaxConcurrent'])) {
            $model->maxConcurrent = $map['MaxConcurrent'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NeedDelete'])) {
            $model->needDelete = $map['NeedDelete'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
