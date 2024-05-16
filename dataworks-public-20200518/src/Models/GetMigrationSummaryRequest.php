<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMigrationSummaryRequest extends Model
{
    /**
     * @description The ID of the request. You can locate logs and troubleshoot issues based on the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $migrationId;

    /**
     * @description The ID of the migration task.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'migrationId' => 'MigrationId',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationId) {
            $res['MigrationId'] = $this->migrationId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMigrationSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationId'])) {
            $model->migrationId = $map['MigrationId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
