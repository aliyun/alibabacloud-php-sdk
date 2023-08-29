<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LocationStorageRankDTO extends Model
{
    /**
     * @var int
     */
    public $fileCnt;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $storage;
    protected $_name = [
        'fileCnt'  => 'FileCnt',
        'location' => 'Location',
        'storage'  => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCnt) {
            $res['FileCnt'] = $this->fileCnt;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LocationStorageRankDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileCnt'])) {
            $model->fileCnt = $map['FileCnt'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
