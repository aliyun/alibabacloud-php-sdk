<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses;
use AlibabaCloud\Tea\Model;

class DescribeAvailableClassesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBInstanceClasses[]
     */
    public $DBInstanceClasses;
    protected $_name = [
        'requestId'         => 'RequestId',
        'DBInstanceClasses' => 'DBInstanceClasses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceClasses) {
            $res['DBInstanceClasses'] = [];
            if (null !== $this->DBInstanceClasses && \is_array($this->DBInstanceClasses)) {
                $n = 0;
                foreach ($this->DBInstanceClasses as $item) {
                    $res['DBInstanceClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableClassesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceClasses'])) {
            if (!empty($map['DBInstanceClasses'])) {
                $model->DBInstanceClasses = [];
                $n                        = 0;
                foreach ($map['DBInstanceClasses'] as $item) {
                    $model->DBInstanceClasses[$n++] = null !== $item ? DBInstanceClasses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
