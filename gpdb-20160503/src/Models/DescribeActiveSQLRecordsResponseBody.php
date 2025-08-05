<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponseBody\queries;

class DescribeActiveSQLRecordsResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var queries[]
     */
    public $queries;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'queries' => 'Queries',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->queries)) {
            Model::validateArray($this->queries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->queries) {
            if (\is_array($this->queries)) {
                $res['Queries'] = [];
                $n1 = 0;
                foreach ($this->queries as $item1) {
                    $res['Queries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Queries'])) {
            if (!empty($map['Queries'])) {
                $model->queries = [];
                $n1 = 0;
                foreach ($map['Queries'] as $item1) {
                    $model->queries[$n1] = queries::fromMap($item1);
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
