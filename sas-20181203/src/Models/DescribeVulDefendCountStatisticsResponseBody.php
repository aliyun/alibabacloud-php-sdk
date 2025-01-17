<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVulDefendCountStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $raspDefendedCount;
    /**
     * @var int
     */
    public $raspDefensibleCount;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'raspDefendedCount'   => 'RaspDefendedCount',
        'raspDefensibleCount' => 'RaspDefensibleCount',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->raspDefendedCount) {
            $res['RaspDefendedCount'] = $this->raspDefendedCount;
        }

        if (null !== $this->raspDefensibleCount) {
            $res['RaspDefensibleCount'] = $this->raspDefensibleCount;
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
        if (isset($map['RaspDefendedCount'])) {
            $model->raspDefendedCount = $map['RaspDefendedCount'];
        }

        if (isset($map['RaspDefensibleCount'])) {
            $model->raspDefensibleCount = $map['RaspDefensibleCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
