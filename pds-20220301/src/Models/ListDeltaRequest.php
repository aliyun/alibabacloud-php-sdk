<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListDeltaRequest extends Model
{
    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $cursor;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @example 622fb09598ae66777c7040109a16f49381f6abe1
     *
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
