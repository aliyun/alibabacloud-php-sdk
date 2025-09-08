<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleStatisticsResponseBody\statisticsInfos;

class DescribeDefenseRuleStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statisticsInfos[]
     */
    public $statisticsInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'statisticsInfos' => 'StatisticsInfos',
    ];

    public function validate()
    {
        if (\is_array($this->statisticsInfos)) {
            Model::validateArray($this->statisticsInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statisticsInfos) {
            if (\is_array($this->statisticsInfos)) {
                $res['StatisticsInfos'] = [];
                $n1 = 0;
                foreach ($this->statisticsInfos as $item1) {
                    $res['StatisticsInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['StatisticsInfos'])) {
            if (!empty($map['StatisticsInfos'])) {
                $model->statisticsInfos = [];
                $n1 = 0;
                foreach ($map['StatisticsInfos'] as $item1) {
                    $model->statisticsInfos[$n1] = statisticsInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
