<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CheckSampleDataSetRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example amv-wz9r8f67h4cqz41u
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
     * @return CheckSampleDataSetRequest
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
