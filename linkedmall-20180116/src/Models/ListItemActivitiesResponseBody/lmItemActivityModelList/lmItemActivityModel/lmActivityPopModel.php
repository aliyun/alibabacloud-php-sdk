<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList\lmItemActivityModel;

use AlibabaCloud\Tea\Model;

class lmActivityPopModel extends Model
{
    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $displayDate;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $title;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'subBizCode'  => 'SubBizCode',
        'endDate'     => 'EndDate',
        'displayDate' => 'DisplayDate',
        'bizId'       => 'BizId',
        'startDate'   => 'StartDate',
        'title'       => 'Title',
        'extInfo'     => 'ExtInfo',
        'id'          => 'Id',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityPopModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
