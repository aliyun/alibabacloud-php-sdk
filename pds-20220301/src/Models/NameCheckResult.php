<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class NameCheckResult extends Model
{
    /**
     * @var string
     */
    public $existFileId;

    /**
     * @var string
     */
    public $existFileType;
    protected $_name = [
        'existFileId' => 'exist_file_id',
        'existFileType' => 'exist_file_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existFileId) {
            $res['exist_file_id'] = $this->existFileId;
        }

        if (null !== $this->existFileType) {
            $res['exist_file_type'] = $this->existFileType;
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
        if (isset($map['exist_file_id'])) {
            $model->existFileId = $map['exist_file_id'];
        }

        if (isset($map['exist_file_type'])) {
            $model->existFileType = $map['exist_file_type'];
        }

        return $model;
    }
}
