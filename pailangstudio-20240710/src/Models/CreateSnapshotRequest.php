<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $snapshotResourceId;

    /**
     * @var string
     */
    public $snapshotResourceType;

    /**
     * @var string
     */
    public $sourceStoragePath;

    /**
     * @var string
     */
    public $workDir;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'creationType' => 'CreationType',
        'description' => 'Description',
        'snapshotName' => 'SnapshotName',
        'snapshotResourceId' => 'SnapshotResourceId',
        'snapshotResourceType' => 'SnapshotResourceType',
        'sourceStoragePath' => 'SourceStoragePath',
        'workDir' => 'WorkDir',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        if (null !== $this->snapshotResourceId) {
            $res['SnapshotResourceId'] = $this->snapshotResourceId;
        }

        if (null !== $this->snapshotResourceType) {
            $res['SnapshotResourceType'] = $this->snapshotResourceType;
        }

        if (null !== $this->sourceStoragePath) {
            $res['SourceStoragePath'] = $this->sourceStoragePath;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        if (isset($map['SnapshotResourceId'])) {
            $model->snapshotResourceId = $map['SnapshotResourceId'];
        }

        if (isset($map['SnapshotResourceType'])) {
            $model->snapshotResourceType = $map['SnapshotResourceType'];
        }

        if (isset($map['SourceStoragePath'])) {
            $model->sourceStoragePath = $map['SourceStoragePath'];
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
