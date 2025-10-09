<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScanRunsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityScanRunsResponseBody\pageInfo\dataQualityScanRuns;

class pageInfo extends Model
{
    /**
     * @var dataQualityScanRuns[]
     */
    public $dataQualityScanRuns;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataQualityScanRuns' => 'DataQualityScanRuns',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataQualityScanRuns)) {
            Model::validateArray($this->dataQualityScanRuns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityScanRuns) {
            if (\is_array($this->dataQualityScanRuns)) {
                $res['DataQualityScanRuns'] = [];
                $n1 = 0;
                foreach ($this->dataQualityScanRuns as $item1) {
                    $res['DataQualityScanRuns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['DataQualityScanRuns'])) {
            if (!empty($map['DataQualityScanRuns'])) {
                $model->dataQualityScanRuns = [];
                $n1 = 0;
                foreach ($map['DataQualityScanRuns'] as $item1) {
                    $model->dataQualityScanRuns[$n1] = dataQualityScanRuns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
