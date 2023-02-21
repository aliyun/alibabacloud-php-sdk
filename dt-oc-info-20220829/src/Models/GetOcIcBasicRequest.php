<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models;

use AlibabaCloud\Tea\Model;

class GetOcIcBasicRequest extends Model
{
    /**
     * @var string
     */
    public $searchKey;
    protected $_name = [
        'searchKey' => 'SearchKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOcIcBasicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        return $model;
    }
}
