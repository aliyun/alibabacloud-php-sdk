<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class UpdateRecycleBinAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $reservedDays;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'reservedDays' => 'ReservedDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
