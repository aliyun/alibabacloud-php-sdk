<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateExportMigrationRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example FULL
     *
     * @var string
     */
    public $exportMode;

    /**
     * @example SAVED
     *
     * @var string
     */
    public $exportObjectStatus;

    /**
     * @example 1589904000000
     *
     * @var int
     */
    public $incrementalSince;

    /**
     * @example test_export_01
     *
     * @var string
     */
    public $name;

    /**
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
