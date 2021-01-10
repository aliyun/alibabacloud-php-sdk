<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponseBody\lmActivitySessionModelList;

use AlibabaCloud\Tea\Model;

class lmActivitySessionModel extends Model
{
    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $displayDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $lmSessionId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'subBizCode'   => 'SubBizCode',
        'displayDate'  => 'DisplayDate',
        'endDate'      => 'EndDate',
        'description'  => 'Description',
        'lmSessionId'  => 'LmSessionId',
        'bizId'        => 'BizId',
        'lmActivityId' => 'LmActivityId',
        'startDate'    => 'StartDate',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
