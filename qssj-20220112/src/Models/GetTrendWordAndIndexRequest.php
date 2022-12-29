<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetTrendWordAndIndexRequest extends Model
{
    /**
     * @example [1623]
     *
     * @var string
     */
    public $cateIds;

    /**
     * @example 202202
     *
     * @var string
     */
    public $endingDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 202201
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'cateIds'    => 'CateIds',
        'endingDate' => 'EndingDate',
        'pageIndex'  => 'PageIndex',
        'startDate'  => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->endingDate) {
            $res['EndingDate'] = $this->endingDate;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrendWordAndIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['EndingDate'])) {
            $model->endingDate = $map['EndingDate'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
