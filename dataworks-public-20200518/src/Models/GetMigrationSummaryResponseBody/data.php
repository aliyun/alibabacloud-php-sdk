<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMigrationSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the user who created the task.
     *
     * @example 982293332403****
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The URL that is used to download the package of the export task. You can use the URL to download the package of the export task.
     *
     * @example https://shanghai-xxx-oss.oss-cn-shanghai.aliyuncs.com/pre/store/f10_bf47_b4fa7df0860f.zip?Expires=1639540903&OSSAccessKeyId=XXXXXXeF4Lv5j&Signature=qxxxxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The time when the task was created.
     *
     * @example 1589904000000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The time when the task was modified.
     *
     * @example 1589904000000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The task ID.
     *
     * @example 1234
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The task name.
     *
     * @example test_export_01
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the user who managed the task.
     *
     * @example 982293332403****
     *
     * @var string
     */
    public $opUser;

    /**
     * @description The ID of the DataWorks workspace to which the migration task belongs.
     *
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the migration task. Valid values:
     *
     *   INIT
     *   EDITING
     *   IMPORTING
     *   IMPORT_ERROR
     *   IMPORT_SUCCESS
     *   EXPORTING
     *   EXPORT_ERROR
     *   EXPORT_SUCCESS
     *   REVOKED
     *   PARTIAL_SUCCESS
     *
     * @example EXPORT_SUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createUser'  => 'CreateUser',
        'downloadUrl' => 'DownloadUrl',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'migrationId' => 'MigrationId',
        'name'        => 'Name',
        'opUser'      => 'OpUser',
        'projectId'   => 'ProjectId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->opUser) {
            $res['OpUser'] = $this->opUser;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OpUser'])) {
            $model->opUser = $map['OpUser'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
