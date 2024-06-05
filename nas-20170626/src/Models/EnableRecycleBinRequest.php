<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class EnableRecycleBinRequest extends Model
{
    /**
     * @description The ID of the file system for which you want to enable the recycle bin feature.
     *
     * This parameter is required.
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The retention period of the files in the recycle bin. Unit: days.
     *
     * Default value: 3.
     * @example 3
     *
     * @var int
     */
    public $reservedDays;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'reservedDays' => 'ReservedDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->reservedDays) {
            $res['ReservedDays'] = $this->reservedDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableRecycleBinRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['ReservedDays'])) {
            $model->reservedDays = $map['ReservedDays'];
        }

        return $model;
    }
}
