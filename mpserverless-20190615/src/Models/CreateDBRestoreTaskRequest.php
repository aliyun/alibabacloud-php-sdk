<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateDBRestoreTaskRequest extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $newCollections;

    /**
     * @var string
     */
    public $originCollections;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'backupId'          => 'BackupId',
        'newCollections'    => 'NewCollections',
        'originCollections' => 'OriginCollections',
        'spaceId'           => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->newCollections) {
            $res['NewCollections'] = $this->newCollections;
        }
        if (null !== $this->originCollections) {
            $res['OriginCollections'] = $this->originCollections;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
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
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['NewCollections'])) {
            $model->newCollections = $map['NewCollections'];
        }
        if (isset($map['OriginCollections'])) {
            $model->originCollections = $map['OriginCollections'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
