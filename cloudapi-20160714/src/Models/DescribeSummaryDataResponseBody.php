<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class DescribeSummaryDataResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireInstanceNum;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $usageApiNum;
    /**
     * @var int
     */
    public $usageGroupNum;
    /**
     * @var int
     */
    public $usageInstanceNum;
    protected $_name = [
        'expireInstanceNum' => 'ExpireInstanceNum',
        'region'            => 'Region',
        'requestId'         => 'RequestId',
        'usageApiNum'       => 'UsageApiNum',
        'usageGroupNum'     => 'UsageGroupNum',
        'usageInstanceNum'  => 'UsageInstanceNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireInstanceNum) {
            $res['ExpireInstanceNum'] = $this->expireInstanceNum;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usageApiNum) {
            $res['UsageApiNum'] = $this->usageApiNum;
        }

        if (null !== $this->usageGroupNum) {
            $res['UsageGroupNum'] = $this->usageGroupNum;
        }

        if (null !== $this->usageInstanceNum) {
            $res['UsageInstanceNum'] = $this->usageInstanceNum;
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
        if (isset($map['ExpireInstanceNum'])) {
            $model->expireInstanceNum = $map['ExpireInstanceNum'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsageApiNum'])) {
            $model->usageApiNum = $map['UsageApiNum'];
        }

        if (isset($map['UsageGroupNum'])) {
            $model->usageGroupNum = $map['UsageGroupNum'];
        }

        if (isset($map['UsageInstanceNum'])) {
            $model->usageInstanceNum = $map['UsageInstanceNum'];
        }

        return $model;
    }
}
