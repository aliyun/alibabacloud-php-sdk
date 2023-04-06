<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class DeltaGetLastCursorRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 622fb09598ae66777c7040109a16f49381f6abe1
     *
     * @var string
     */
    public $syncRootId;
    protected $_name = [
        'driveId'    => 'drive_id',
        'syncRootId' => 'sync_root_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeltaGetLastCursorRequest
     */
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
