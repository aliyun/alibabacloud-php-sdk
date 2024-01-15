<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeSecurityIPListResponseBody\groupItems;
use AlibabaCloud\Tea\Model;

class DescribeSecurityIPListResponseBody extends Model
{
    /**
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var groupItems[]
     */
    public $groupItems;

    /**
     * @example 5CBE044D-4594-525D-AC65-E988553D853E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'groupItems'     => 'GroupItems',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->groupItems) {
            $res['GroupItems'] = [];
            if (null !== $this->groupItems && \is_array($this->groupItems)) {
                $n = 0;
                foreach ($this->groupItems as $item) {
                    $res['GroupItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityIPListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n                 = 0;
                foreach ($map['GroupItems'] as $item) {
                    $model->groupItems[$n++] = null !== $item ? groupItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
