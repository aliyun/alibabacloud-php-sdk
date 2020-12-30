<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageRequest extends Model
{
    /**
     * @var bool
     */
    public $usingSharedStorage;
    protected $_name = [
        'usingSharedStorage' => 'UsingSharedStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usingSharedStorage) {
            $res['UsingSharedStorage'] = $this->usingSharedStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsingSharedStorage'])) {
            $model->usingSharedStorage = $map['UsingSharedStorage'];
        }

        return $model;
    }
}
