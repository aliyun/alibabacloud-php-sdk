<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeInstanceVulStatisticsResponseBody\vulStat;

class DescribeInstanceVulStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var vulStat
     */
    public $vulStat;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulStat'   => 'VulStat',
    ];

    public function validate()
    {
        if (null !== $this->vulStat) {
            $this->vulStat->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulStat) {
            $res['VulStat'] = null !== $this->vulStat ? $this->vulStat->toArray($noStream) : $this->vulStat;
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

        if (isset($map['VulStat'])) {
            $model->vulStat = vulStat::fromMap($map['VulStat']);
        }

        return $model;
    }
}
