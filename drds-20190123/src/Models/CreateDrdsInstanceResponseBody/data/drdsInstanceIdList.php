<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class drdsInstanceIdList extends Model
{
    /**
     * @var string[]
     */
    public $drdsInstanceIdList;
    protected $_name = [
        'drdsInstanceIdList' => 'drdsInstanceIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceIdList) {
            $res['drdsInstanceIdList'] = $this->drdsInstanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsInstanceIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drdsInstanceIdList'])) {
            if (!empty($map['drdsInstanceIdList'])) {
                $model->drdsInstanceIdList = $map['drdsInstanceIdList'];
            }
        }

        return $model;
    }
}
