<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryDataResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $expireInstanceNum;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $usageApiNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $usageGroupNum;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeSummaryDataResponseBody
     */
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
