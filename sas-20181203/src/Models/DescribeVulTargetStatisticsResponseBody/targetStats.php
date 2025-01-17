<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody\targetStats\targets;

class targetStats extends Model
{
    /**
     * @var targets[]
     */
    public $targets;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var int
     */
    public $uuidCount;
    /**
     * @var string
     */
    public $vulType;
    protected $_name = [
        'targets'    => 'Targets',
        'totalCount' => 'TotalCount',
        'uuidCount'  => 'UuidCount',
        'vulType'    => 'VulType',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1             = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->uuidCount) {
            $res['UuidCount'] = $this->uuidCount;
        }

        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
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
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1             = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UuidCount'])) {
            $model->uuidCount = $map['UuidCount'];
        }

        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
