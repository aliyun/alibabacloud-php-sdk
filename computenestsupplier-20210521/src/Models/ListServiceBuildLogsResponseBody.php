<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceBuildLogsResponseBody\buildLogs;

class ListServiceBuildLogsResponseBody extends Model
{
    /**
     * @var buildLogs[]
     */
    public $buildLogs;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'buildLogs' => 'BuildLogs',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->buildLogs)) {
            Model::validateArray($this->buildLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildLogs) {
            if (\is_array($this->buildLogs)) {
                $res['BuildLogs'] = [];
                $n1 = 0;
                foreach ($this->buildLogs as $item1) {
                    $res['BuildLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['BuildLogs'])) {
            if (!empty($map['BuildLogs'])) {
                $model->buildLogs = [];
                $n1 = 0;
                foreach ($map['BuildLogs'] as $item1) {
                    $model->buildLogs[$n1] = buildLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
