<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrIbsResponseBody\data\cdrIbs;

class data extends Model
{
    /**
     * @var cdrIbs[]
     */
    public $cdrIbs;

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
        'cdrIbs' => 'CdrIbs',
        'clinkRequestId' => 'ClinkRequestId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cdrIbs)) {
            Model::validateArray($this->cdrIbs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrIbs) {
            if (\is_array($this->cdrIbs)) {
                $res['CdrIbs'] = [];
                $n1 = 0;
                foreach ($this->cdrIbs as $item1) {
                    $res['CdrIbs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CdrIbs'])) {
            if (!empty($map['CdrIbs'])) {
                $model->cdrIbs = [];
                $n1 = 0;
                foreach ($map['CdrIbs'] as $item1) {
                    $model->cdrIbs[$n1] = cdrIbs::fromMap($item1);
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
