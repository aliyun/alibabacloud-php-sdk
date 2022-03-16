<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\full;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupSummaryResponseBody\incr;
use AlibabaCloud\Tea\Model;

class DescribeBackupSummaryResponseBody extends Model
{
    /**
     * @var full
     */
    public $full;

    /**
     * @var incr
     */
    public $incr;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'full'      => 'Full',
        'incr'      => 'Incr',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->full) {
            $res['Full'] = null !== $this->full ? $this->full->toMap() : null;
        }
        if (null !== $this->incr) {
            $res['Incr'] = null !== $this->incr ? $this->incr->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Full'])) {
            $model->full = full::fromMap($map['Full']);
        }
        if (isset($map['Incr'])) {
            $model->incr = incr::fromMap($map['Incr']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
