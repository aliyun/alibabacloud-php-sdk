<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ExecuteAutoDisposeRecordsRequest;

use AlibabaCloud\Dara\Model;

class unSelectedEntityList extends Model
{
    /**
     * @var string
     */
    public $autoDisposeRecordId;

    /**
     * @var string
     */
    public $entityUuid;
    protected $_name = [
        'autoDisposeRecordId' => 'AutoDisposeRecordId',
        'entityUuid' => 'EntityUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDisposeRecordId) {
            $res['AutoDisposeRecordId'] = $this->autoDisposeRecordId;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
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
        if (isset($map['AutoDisposeRecordId'])) {
            $model->autoDisposeRecordId = $map['AutoDisposeRecordId'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        return $model;
    }
}
