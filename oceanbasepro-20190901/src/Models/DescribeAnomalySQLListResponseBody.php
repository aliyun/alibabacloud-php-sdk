<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponseBody\anomalySQLList;

class DescribeAnomalySQLListResponseBody extends Model
{
    /**
     * @var anomalySQLList[]
     */
    public $anomalySQLList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'anomalySQLList' => 'AnomalySQLList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->anomalySQLList)) {
            Model::validateArray($this->anomalySQLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anomalySQLList) {
            if (\is_array($this->anomalySQLList)) {
                $res['AnomalySQLList'] = [];
                $n1 = 0;
                foreach ($this->anomalySQLList as $item1) {
                    $res['AnomalySQLList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AnomalySQLList'])) {
            if (!empty($map['AnomalySQLList'])) {
                $model->anomalySQLList = [];
                $n1 = 0;
                foreach ($map['AnomalySQLList'] as $item1) {
                    $model->anomalySQLList[$n1] = anomalySQLList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
