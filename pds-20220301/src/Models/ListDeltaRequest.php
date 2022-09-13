<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListDeltaRequest extends Model
{
    /**
     * @var string
     */
    public $cursor;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $syncRootId;
    protected $_name = [
        'cursor'     => 'cursor',
        'driveId'    => 'drive_id',
        'limit'      => 'limit',
        'syncRootId' => 'sync_root_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->syncRootId) {
            $res['sync_root_id'] = $this->syncRootId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeltaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['sync_root_id'])) {
            $model->syncRootId = $map['sync_root_id'];
        }

        return $model;
    }
}
