<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeProcessListResponseBody\processList;

class DescribeProcessListResponseBody extends Model
{
    /**
     * @var processList
     */
    public $processList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'processList' => 'ProcessList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->processList) {
            $this->processList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processList) {
            $res['ProcessList'] = null !== $this->processList ? $this->processList->toArray($noStream) : $this->processList;
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
        if (isset($map['ProcessList'])) {
            $model->processList = processList::fromMap($map['ProcessList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
