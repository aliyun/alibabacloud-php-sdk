<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DropSearchLibRequest extends Model
{
    /**
     * @description The name of the search library.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'searchLibName' => 'SearchLibName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DropSearchLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
