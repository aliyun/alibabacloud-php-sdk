<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeLakeCacheSizeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example amv-bp10b6646l07akdt
     *
     * @var string
     */
    public $DBClusterId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLakeCacheSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        return $model;
    }
}
