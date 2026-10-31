<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetGranularityBySummaryIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int[]
     */
    public $dimIds;

    /**
     * @var int
     */
    public $granularityId;

    /**
     * @var int
     */
    public $summaryId;
    protected $_name = [
        'dimIds' => 'DimIds',
        'granularityId' => 'GranularityId',
        'summaryId' => 'SummaryId',
    ];

    public function validate()
    {
        if (\is_array($this->dimIds)) {
            Model::validateArray($this->dimIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimIds) {
            if (\is_array($this->dimIds)) {
                $res['DimIds'] = [];
                $n1 = 0;
                foreach ($this->dimIds as $item1) {
                    $res['DimIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->granularityId) {
            $res['GranularityId'] = $this->granularityId;
        }

        if (null !== $this->summaryId) {
            $res['SummaryId'] = $this->summaryId;
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
        if (isset($map['DimIds'])) {
            if (!empty($map['DimIds'])) {
                $model->dimIds = [];
                $n1 = 0;
                foreach ($map['DimIds'] as $item1) {
                    $model->dimIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GranularityId'])) {
            $model->granularityId = $map['GranularityId'];
        }

        if (isset($map['SummaryId'])) {
            $model->summaryId = $map['SummaryId'];
        }

        return $model;
    }
}
