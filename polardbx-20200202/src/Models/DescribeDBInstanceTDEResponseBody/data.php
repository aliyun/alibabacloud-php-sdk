<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTDEResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $TDEStatus;
    protected $_name = [
        'TDEStatus' => 'TDEStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        return $model;
    }
}
