<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesResponseBody;

use AlibabaCloud\Tea\Model;

class deleteFileResultList extends Model
{
    /**
     * @description The time when the file was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1660638613798
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The result of deletion. A value of OK indicates that the file is deleted. Other values indicate that the file failed to be deleted.
     *
     * Valid values:
     *
     *   OK: The file was deleted.
     *   NotFound: The file was not found.
     *
     * @example OK
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'result'          => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteFileResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
