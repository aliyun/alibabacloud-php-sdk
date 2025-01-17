<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVulMetaCountStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $appCount;
    /**
     * @var int
     */
    public $cveCount;
    /**
     * @var int
     */
    public $raspDefendCount;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
