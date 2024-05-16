<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateExportMigrationRequest extends Model
{
    /**
     * @description The description of the export task.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The export mode of the export task. Valid values:
     *
     *   FULL: The export task is used to export all data objects.
     *   INCREMENTAL: The export task is used to export data objects that were modified since the specified point in time. If you set this parameter to INCREMENTAL, you must configure the IncrementalSince parameter.
     *
     * This parameter is required.
     * @example FULL
     *
     * @var string
     */
    public $exportMode;

    /**
     * @description The status of the data objects that you want to export in the export task. The system exports data objects in the state that is specified by this parameter. Valid values:
     *
     *   SAVED: Data objects that are in the SAVED state are exported.
     *   SUBMITTED: Data objects that are in the SUBMITTED state are exported.
     *   DEPLOYED: Data objects that are in the DEPLOYED state are exported.
     *
     * @example SAVED
     *
     * @var string
     */
    public $exportObjectStatus;

    /**
     * @description The start time of the incremental export task.
     *
     * The IncrementalSince parameter takes effect only when the ExportMode parameter is set to INCREMENTAL.
     * @example 1589904000000
     *
     * @var int
     */
    public $incrementalSince;

    /**
     * @description The name of the export task.
     *
     * This parameter is required.
     * @example test_export_01
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the workspace ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'description'        => 'Description',
        'exportMode'         => 'ExportMode',
        'exportObjectStatus' => 'ExportObjectStatus',
        'incrementalSince'   => 'IncrementalSince',
        'name'               => 'Name',
        'projectId'          => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->exportMode) {
            $res['ExportMode'] = $this->exportMode;
        }
        if (null !== $this->exportObjectStatus) {
            $res['ExportObjectStatus'] = $this->exportObjectStatus;
        }
        if (null !== $this->incrementalSince) {
            $res['IncrementalSince'] = $this->incrementalSince;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExportMigrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExportMode'])) {
            $model->exportMode = $map['ExportMode'];
        }
        if (isset($map['ExportObjectStatus'])) {
            $model->exportObjectStatus = $map['ExportObjectStatus'];
        }
        if (isset($map['IncrementalSince'])) {
            $model->incrementalSince = $map['IncrementalSince'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
