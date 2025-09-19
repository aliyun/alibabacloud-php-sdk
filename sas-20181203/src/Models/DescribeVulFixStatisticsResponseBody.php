<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody\fixStat;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulFixStatisticsResponseBody\fixTotal;

class DescribeVulFixStatisticsResponseBody extends Model
{
    /**
     * @var fixStat[]
     */
    public $fixStat;

    /**
     * @var fixTotal
     */
    public $fixTotal;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fixStat' => 'FixStat',
        'fixTotal' => 'FixTotal',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fixStat)) {
            Model::validateArray($this->fixStat);
        }
        if (null !== $this->fixTotal) {
            $this->fixTotal->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fixStat) {
            if (\is_array($this->fixStat)) {
                $res['FixStat'] = [];
                $n1 = 0;
                foreach ($this->fixStat as $item1) {
                    $res['FixStat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fixTotal) {
            $res['FixTotal'] = null !== $this->fixTotal ? $this->fixTotal->toArray($noStream) : $this->fixTotal;
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
        if (isset($map['FixStat'])) {
            if (!empty($map['FixStat'])) {
                $model->fixStat = [];
                $n1 = 0;
                foreach ($map['FixStat'] as $item1) {
                    $model->fixStat[$n1] = fixStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FixTotal'])) {
            $model->fixTotal = fixTotal::fromMap($map['FixTotal']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
