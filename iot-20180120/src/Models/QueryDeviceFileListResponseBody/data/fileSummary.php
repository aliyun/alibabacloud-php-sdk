<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponseBody\data;

use AlibabaCloud\Tea\Model;

class fileSummary extends Model
{
    /**
     * @description The ID of each file. The ID is the unique identifier for the file.
     *
     * @example xL0G67MBLBDtkR7GCfT******
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example testFile2.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description The size of the file. Unit: KB.
     *
     * @example 1024000
     *
     * @var string
     */
    public $size;

    /**
     * @description The time when the file was created.
     *
     * @example 2019-03-21T08:45:42.000Z
     *
     * @var string
     */
    public $utcCreatedOn;
    protected $_name = [
        'fileId'       => 'FileId',
        'name'         => 'Name',
        'size'         => 'Size',
        'utcCreatedOn' => 'UtcCreatedOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->utcCreatedOn) {
            $res['UtcCreatedOn'] = $this->utcCreatedOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['UtcCreatedOn'])) {
            $model->utcCreatedOn = $map['UtcCreatedOn'];
        }

        return $model;
    }
}
