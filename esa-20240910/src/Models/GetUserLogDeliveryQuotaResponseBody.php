<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetUserLogDeliveryQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $freeQuota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'freeQuota' => 'FreeQuota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->freeQuota) {
            $res['FreeQuota'] = $this->freeQuota;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['FreeQuota'])) {
            $model->freeQuota = $map['FreeQuota'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
