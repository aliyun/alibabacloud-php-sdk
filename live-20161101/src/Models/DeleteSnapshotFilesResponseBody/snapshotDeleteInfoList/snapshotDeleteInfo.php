<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody\snapshotDeleteInfoList;

use AlibabaCloud\Tea\Model;

class snapshotDeleteInfo extends Model
{
    /**
     * @description The timestamp when the snapshot was captured. Unit: milliseconds.
     *
     * @example 1653641526637
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The processing result of the snapshot. Valid values:
     *
     *   **OK**: The snapshot was deleted.
     *   **FileNotFound**: The snapshot was not found.
     *
     * @example OK
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotDeleteInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
