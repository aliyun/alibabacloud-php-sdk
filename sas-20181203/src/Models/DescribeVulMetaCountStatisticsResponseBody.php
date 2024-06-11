<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulMetaCountStatisticsResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $appCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $cveCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $raspDefendCount;

    /**
     * @example 571B2642-BF51-5BDD-906B-D2340DB9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $sysCount;
    protected $_name = [
        'appCount'        => 'AppCount',
        'cveCount'        => 'CveCount',
        'raspDefendCount' => 'RaspDefendCount',
        'requestId'       => 'RequestId',
        'sysCount'        => 'SysCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->cveCount) {
            $res['CveCount'] = $this->cveCount;
        }
        if (null !== $this->raspDefendCount) {
            $res['RaspDefendCount'] = $this->raspDefendCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sysCount) {
            $res['SysCount'] = $this->sysCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulMetaCountStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['CveCount'])) {
            $model->cveCount = $map['CveCount'];
        }
        if (isset($map['RaspDefendCount'])) {
            $model->raspDefendCount = $map['RaspDefendCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SysCount'])) {
            $model->sysCount = $map['SysCount'];
        }

        return $model;
    }
}
