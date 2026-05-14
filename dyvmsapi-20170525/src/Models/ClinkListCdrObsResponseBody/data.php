<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObsResponseBody\data\cdrObs;

class data extends Model
{
    /**
     * @var cdrObs[]
     */
    public $cdrObs;

    /**
     * @var string
     */
    public $clinkRequestId;

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
        'cdrObs' => 'CdrObs',
        'clinkRequestId' => 'ClinkRequestId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cdrObs)) {
            Model::validateArray($this->cdrObs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrObs) {
            if (\is_array($this->cdrObs)) {
                $res['CdrObs'] = [];
                $n1 = 0;
                foreach ($this->cdrObs as $item1) {
                    $res['CdrObs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
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
        if (isset($map['CdrObs'])) {
            if (!empty($map['CdrObs'])) {
                $model->cdrObs = [];
                $n1 = 0;
                foreach ($map['CdrObs'] as $item1) {
                    $model->cdrObs[$n1] = cdrObs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
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
