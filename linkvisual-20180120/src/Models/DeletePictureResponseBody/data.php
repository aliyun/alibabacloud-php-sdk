<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\DeletePictureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $deletedCount;
    protected $_name = [
        'deletedCount' => 'DeletedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedCount) {
            $res['DeletedCount'] = $this->deletedCount;
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
        if (isset($map['DeletedCount'])) {
            $model->deletedCount = $map['DeletedCount'];
        }

        return $model;
    }
}
