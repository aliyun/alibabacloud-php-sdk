<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class GetLibraryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example cjshcxxxx
     *
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'libraryId' => 'libraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLibraryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        return $model;
    }
}
