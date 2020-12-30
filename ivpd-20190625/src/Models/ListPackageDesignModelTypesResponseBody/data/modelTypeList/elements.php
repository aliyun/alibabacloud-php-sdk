<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponseBody\data\modelTypeList;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $sideName;
    protected $_name = [
        'sideName' => 'SideName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sideName) {
            $res['SideName'] = $this->sideName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SideName'])) {
            $model->sideName = $map['SideName'];
        }

        return $model;
    }
}
