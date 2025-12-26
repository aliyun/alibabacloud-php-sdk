<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class Snapshot extends Model
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
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $snapshotId;

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
    public $snapshotStoragePath;

    /**
     * @var string
     */
    public $snapshotUrl;

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
        'creator' => 'Creator',
        'description' => 'Description',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'snapshotId' => 'SnapshotId',
        'snapshotName' => 'SnapshotName',
        'snapshotResourceId' => 'SnapshotResourceId',
        'snapshotResourceType' => 'SnapshotResourceType',
        'snapshotStoragePath' => 'SnapshotStoragePath',
        'snapshotUrl' => 'SnapshotUrl',
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

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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

        if (null !== $this->snapshotStoragePath) {
            $res['SnapshotStoragePath'] = $this->snapshotStoragePath;
        }

        if (null !== $this->snapshotUrl) {
            $res['SnapshotUrl'] = $this->snapshotUrl;
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

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
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

        if (isset($map['SnapshotStoragePath'])) {
            $model->snapshotStoragePath = $map['SnapshotStoragePath'];
        }

        if (isset($map['SnapshotUrl'])) {
            $model->snapshotUrl = $map['SnapshotUrl'];
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
