<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteSDGRequest extends Model
{
    /**
     * @description The IDs of the SDGs that you want to delete.
     *
     * This parameter is required.
     * @var string[]
     */
    public $SDGId;
    protected $_name = [
        'SDGId' => 'SDGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSDGRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SDGId'])) {
            if (!empty($map['SDGId'])) {
                $model->SDGId = $map['SDGId'];
            }
        }

        return $model;
    }
}
