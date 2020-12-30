<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class GetPhotoStoreRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;
    protected $_name = [
        'storeName' => 'StoreName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPhotoStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }

        return $model;
    }
}
