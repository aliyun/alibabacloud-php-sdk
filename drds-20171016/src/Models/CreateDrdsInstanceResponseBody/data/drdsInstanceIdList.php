<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\CreateDrdsInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class drdsInstanceIdList extends Model
{
    /**
     * @var string[]
     */
    public $drdsInstanceId;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
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
        if (isset($map['DrdsInstanceId'])) {
            if (!empty($map['DrdsInstanceId'])) {
                $model->drdsInstanceId = $map['DrdsInstanceId'];
            }
        }

        return $model;
    }
}
