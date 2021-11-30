<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateExportMigrationRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exportMode;

    /**
     * @var string
     */
    public $exportObjectStatus;

    /**
     * @var int
     */
    public $incrementalSince;

    /**
     * @var string
     */
    public $name;

    /**
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
