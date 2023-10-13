<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @var DBInstanceNetInfos[]
     */
    public $DBInstanceNetInfos;

    /**
     * @example ADF42B18-43FD-5100-83A9-BE81AB70C863
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceNetInfos' => 'DBInstanceNetInfos',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceNetInfos) {
            $res['DBInstanceNetInfos'] = [];
            if (null !== $this->DBInstanceNetInfos && \is_array($this->DBInstanceNetInfos)) {
                $n = 0;
                foreach ($this->DBInstanceNetInfos as $item) {
                    $res['DBInstanceNetInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDBInstanceNetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceNetInfos'])) {
            if (!empty($map['DBInstanceNetInfos'])) {
                $model->DBInstanceNetInfos = [];
                $n                         = 0;
                foreach ($map['DBInstanceNetInfos'] as $item) {
                    $model->DBInstanceNetInfos[$n++] = null !== $item ? DBInstanceNetInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
