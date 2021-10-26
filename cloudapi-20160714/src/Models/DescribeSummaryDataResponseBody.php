<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeSummaryDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $usageGroupNum;

    /**
     * @var int
     */
    public $usageInstanceNum;

    /**
     * @var int
     */
    public $usageApiNum;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $comeingSoonInstanceNum;

    /**
     * @var int
     */
    public $expireInstanceNum;
    protected $_name = [
        'requestId'              => 'RequestId',
        'usageGroupNum'          => 'UsageGroupNum',
        'usageInstanceNum'       => 'UsageInstanceNum',
        'usageApiNum'            => 'UsageApiNum',
        'region'                 => 'Region',
        'comeingSoonInstanceNum' => 'ComeingSoonInstanceNum',
        'expireInstanceNum'      => 'ExpireInstanceNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->usageGroupNum) {
            $res['UsageGroupNum'] = $this->usageGroupNum;
        }
        if (null !== $this->usageInstanceNum) {
            $res['UsageInstanceNum'] = $this->usageInstanceNum;
        }
        if (null !== $this->usageApiNum) {
            $res['UsageApiNum'] = $this->usageApiNum;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->comeingSoonInstanceNum) {
            $res['ComeingSoonInstanceNum'] = $this->comeingSoonInstanceNum;
        }
        if (null !== $this->expireInstanceNum) {
            $res['ExpireInstanceNum'] = $this->expireInstanceNum;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsageGroupNum'])) {
            $model->usageGroupNum = $map['UsageGroupNum'];
        }
        if (isset($map['UsageInstanceNum'])) {
            $model->usageInstanceNum = $map['UsageInstanceNum'];
        }
        if (isset($map['UsageApiNum'])) {
            $model->usageApiNum = $map['UsageApiNum'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ComeingSoonInstanceNum'])) {
            $model->comeingSoonInstanceNum = $map['ComeingSoonInstanceNum'];
        }
        if (isset($map['ExpireInstanceNum'])) {
            $model->expireInstanceNum = $map['ExpireInstanceNum'];
        }

        return $model;
    }
}
