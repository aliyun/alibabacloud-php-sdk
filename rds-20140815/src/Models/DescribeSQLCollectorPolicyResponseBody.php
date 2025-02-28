<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeSQLCollectorPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $SQLCollectorStatus;
    /**
     * @var int
     */
    public $storagePeriod;
    protected $_name = [
        'requestId'          => 'RequestId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
        'storagePeriod'      => 'StoragePeriod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }

        if (null !== $this->storagePeriod) {
            $res['StoragePeriod'] = $this->storagePeriod;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }

        if (isset($map['StoragePeriod'])) {
            $model->storagePeriod = $map['StoragePeriod'];
        }

        return $model;
    }
}
