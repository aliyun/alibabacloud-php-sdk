<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponseBody\queries;
use AlibabaCloud\Tea\Model;

class DescribeActiveSQLRecordsResponseBody extends Model
{
    /**
     * @example gp-bp***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'queries'      => 'Queries',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->queries) {
            $res['Queries'] = [];
            if (null !== $this->queries && \is_array($this->queries)) {
                $n = 0;
                foreach ($this->queries as $item) {
                    $res['Queries'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeActiveSQLRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Queries'])) {
            if (!empty($map['Queries'])) {
                $model->queries = [];
                $n              = 0;
                foreach ($map['Queries'] as $item) {
                    $model->queries[$n++] = null !== $item ? queries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
