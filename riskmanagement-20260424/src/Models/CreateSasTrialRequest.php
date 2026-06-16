<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\CreateSasTrialRequest\sdkRequest;

class CreateSasTrialRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var sdkRequest
     */
    public $sdkRequest;
    protected $_name = [
        'regionId' => 'RegionId',
        'sdkRequest' => 'SdkRequest',
    ];

    public function validate()
    {
        if (null !== $this->sdkRequest) {
            $this->sdkRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sdkRequest) {
            $res['SdkRequest'] = null !== $this->sdkRequest ? $this->sdkRequest->toArray($noStream) : $this->sdkRequest;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SdkRequest'])) {
            $model->sdkRequest = sdkRequest::fromMap($map['SdkRequest']);
        }

        return $model;
    }
}
