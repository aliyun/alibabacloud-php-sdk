<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteSDGShrinkRequest extends Model
{
    /**
     * @description IDs of SDGs that you want to delete. You can delete a maximum of 10 SDGs at a time.
     *
     * This parameter is required.
     * @var string
     */
    public $SDGIdShrink;
    protected $_name = [
        'SDGIdShrink' => 'SDGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SDGIdShrink) {
            $res['SDGId'] = $this->SDGIdShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SDGId'])) {
            $model->SDGIdShrink = $map['SDGId'];
        }

        return $model;
    }
}
