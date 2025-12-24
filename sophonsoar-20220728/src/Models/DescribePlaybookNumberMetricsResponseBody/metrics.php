<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNumberMetricsResponseBody;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $startUpNum;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'startUpNum' => 'StartUpNum',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->startUpNum) {
            $res['StartUpNum'] = $this->startUpNum;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['StartUpNum'])) {
            $model->startUpNum = $map['StartUpNum'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
