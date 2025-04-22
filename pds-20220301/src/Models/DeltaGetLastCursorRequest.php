<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class DeltaGetLastCursorRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $syncRootId;
    protected $_name = [
        'driveId' => 'drive_id',
        'syncRootId' => 'sync_root_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->syncRootId) {
            $res['sync_root_id'] = $this->syncRootId;
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['sync_root_id'])) {
            $model->syncRootId = $map['sync_root_id'];
        }

        return $model;
    }
}
