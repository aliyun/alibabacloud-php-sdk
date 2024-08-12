<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DetachEndUsersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $endUserIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'endUserIds' => 'EndUserIds',
        'serialNo'   => 'SerialNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserIds) {
            $res['EndUserIds'] = $this->endUserIds;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachEndUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserIds'])) {
            $model->endUserIds = $map['EndUserIds'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
