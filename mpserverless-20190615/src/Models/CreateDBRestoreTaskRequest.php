<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateDBRestoreTaskRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $originCollections;

    /**
     * @var string
     */
    public $newCollections;
    protected $_name = [
        'spaceId'           => 'SpaceId',
        'backupId'          => 'BackupId',
        'originCollections' => 'OriginCollections',
        'newCollections'    => 'NewCollections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->originCollections) {
            $res['OriginCollections'] = $this->originCollections;
        }
        if (null !== $this->newCollections) {
            $res['NewCollections'] = $this->newCollections;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBRestoreTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['OriginCollections'])) {
            $model->originCollections = $map['OriginCollections'];
        }
        if (isset($map['NewCollections'])) {
            $model->newCollections = $map['NewCollections'];
        }

        return $model;
    }
}
