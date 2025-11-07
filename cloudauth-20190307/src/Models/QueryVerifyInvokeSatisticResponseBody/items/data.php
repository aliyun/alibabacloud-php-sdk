<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryVerifyInvokeSatisticResponseBody\items;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $statisticsCount;

    /**
     * @var string
     */
    public $statisticsType;
    protected $_name = [
        'statisticsCount' => 'StatisticsCount',
        'statisticsType' => 'StatisticsType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statisticsCount) {
            $res['StatisticsCount'] = $this->statisticsCount;
        }

        if (null !== $this->statisticsType) {
            $res['StatisticsType'] = $this->statisticsType;
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
        if (isset($map['StatisticsCount'])) {
            $model->statisticsCount = $map['StatisticsCount'];
        }

        if (isset($map['StatisticsType'])) {
            $model->statisticsType = $map['StatisticsType'];
        }

        return $model;
    }
}
