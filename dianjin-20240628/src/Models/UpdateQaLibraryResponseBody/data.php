<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 6jh378d
     *
     * @var string
     */
    public $qaLibraryId;
    protected $_name = [
        'qaLibraryId' => 'qaLibraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qaLibraryId) {
            $res['qaLibraryId'] = $this->qaLibraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['qaLibraryId'])) {
            $model->qaLibraryId = $map['qaLibraryId'];
        }

        return $model;
    }
}
