<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CheckPolarFsQuotaConsistencyResponseBody\quotaItem;

class CheckPolarFsQuotaConsistencyResponseBody extends Model
{
    /**
     * @var string
     */
    public $polarFsInstanceId;

    /**
     * @var quotaItem
     */
    public $quotaItem;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'polarFsInstanceId' => 'PolarFsInstanceId',
        'quotaItem' => 'QuotaItem',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->quotaItem) {
            $this->quotaItem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
        }

        if (null !== $this->quotaItem) {
            $res['QuotaItem'] = null !== $this->quotaItem ? $this->quotaItem->toArray($noStream) : $this->quotaItem;
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
        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        if (isset($map['QuotaItem'])) {
            $model->quotaItem = quotaItem::fromMap($map['QuotaItem']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
