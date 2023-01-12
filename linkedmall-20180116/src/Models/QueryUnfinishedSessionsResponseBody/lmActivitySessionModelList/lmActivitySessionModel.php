<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponseBody\lmActivitySessionModelList;

use AlibabaCloud\Tea\Model;

class lmActivitySessionModel extends Model
{
    /**
     * @example LMALL20211013****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example 2017-11-30 23:59:59
     *
     * @var string
     */
    public $displayDate;

    /**
     * @example 2017-11-30 23:59:59
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 679
     *
     * @var int
     */
    public $lmActivityId;

    /**
     * @var int
     */
    public $lmSessionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 2021-05-01 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 04fe37ad2d7c42a3b215ff3a5a9*****
     *
     * @var string
     */
    public $subBizCode;
    protected $_name = [
        'bizId'        => 'BizId',
        'description'  => 'Description',
        'displayDate'  => 'DisplayDate',
        'endDate'      => 'EndDate',
        'lmActivityId' => 'LmActivityId',
        'lmSessionId'  => 'LmSessionId',
        'name'         => 'Name',
        'startDate'    => 'StartDate',
        'subBizCode'   => 'SubBizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivitySessionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }

        return $model;
    }
}
