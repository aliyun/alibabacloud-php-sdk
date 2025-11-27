<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableClassesResponseBody\DBInstanceClasses;

class DescribeAvailableClassesResponseBody extends Model
{
    /**
     * @var DBInstanceClasses[]
     */
    public $DBInstanceClasses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceClasses' => 'DBInstanceClasses',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceClasses)) {
            Model::validateArray($this->DBInstanceClasses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceClasses) {
            if (\is_array($this->DBInstanceClasses)) {
                $res['DBInstanceClasses'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceClasses as $item1) {
                    $res['DBInstanceClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceClasses'])) {
            if (!empty($map['DBInstanceClasses'])) {
                $model->DBInstanceClasses = [];
                $n1 = 0;
                foreach ($map['DBInstanceClasses'] as $item1) {
                    $model->DBInstanceClasses[$n1] = DBInstanceClasses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
