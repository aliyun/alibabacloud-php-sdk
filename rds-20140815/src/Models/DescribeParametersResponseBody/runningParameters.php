<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponseBody\runningParameters\DBInstanceParameter;
use AlibabaCloud\Tea\Model;

class runningParameters extends Model
{
    /**
     * @var DBInstanceParameter[]
     */
    public $DBInstanceParameter;
    protected $_name = [
        'DBInstanceParameter' => 'DBInstanceParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceParameter) {
            $res['DBInstanceParameter'] = [];
            if (null !== $this->DBInstanceParameter && \is_array($this->DBInstanceParameter)) {
                $n = 0;
                foreach ($this->DBInstanceParameter as $item) {
                    $res['DBInstanceParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceParameter'])) {
            if (!empty($map['DBInstanceParameter'])) {
                $model->DBInstanceParameter = [];
                $n                          = 0;
                foreach ($map['DBInstanceParameter'] as $item) {
                    $model->DBInstanceParameter[$n++] = null !== $item ? DBInstanceParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
