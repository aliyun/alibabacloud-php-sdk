<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListCdrObResponseBody\data\cdrOb;

class data extends Model
{
    /**
     * @var cdrOb[]
     */
    public $cdrOb;

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
     * @var string
     */
    public $scrollId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cdrOb' => 'CdrOb',
        'clinkRequestId' => 'ClinkRequestId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'scrollId' => 'ScrollId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cdrOb)) {
            Model::validateArray($this->cdrOb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdrOb) {
            if (\is_array($this->cdrOb)) {
                $res['CdrOb'] = [];
                $n1 = 0;
                foreach ($this->cdrOb as $item1) {
                    $res['CdrOb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
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
        if (isset($map['CdrOb'])) {
            if (!empty($map['CdrOb'])) {
                $model->cdrOb = [];
                $n1 = 0;
                foreach ($map['CdrOb'] as $item1) {
                    $model->cdrOb[$n1] = cdrOb::fromMap($item1);
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

        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
