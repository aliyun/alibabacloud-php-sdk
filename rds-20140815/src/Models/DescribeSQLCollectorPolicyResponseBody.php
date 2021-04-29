<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLCollectorPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $storagePeriod;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SQLCollectorStatus;
    protected $_name = [
        'storagePeriod'      => 'StoragePeriod',
        'requestId'          => 'RequestId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storagePeriod) {
            $res['StoragePeriod'] = $this->storagePeriod;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLCollectorPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoragePeriod'])) {
            $model->storagePeriod = $map['StoragePeriod'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }

        return $model;
    }
}
