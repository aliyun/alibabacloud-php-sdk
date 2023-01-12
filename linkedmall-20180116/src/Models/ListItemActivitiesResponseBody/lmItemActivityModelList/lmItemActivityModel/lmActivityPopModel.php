<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ListItemActivitiesResponseBody\lmItemActivityModelList\lmItemActivityModel;

use AlibabaCloud\Tea\Model;

class lmActivityPopModel extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 2022-03-31 14:25:00
     *
     * @var string
     */
    public $displayDate;

    /**
     * @example 2022-04-04 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 666
     *
     * @var int
     */
    public $id;

    /**
     * @example 2022-04-01 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 4309074a******9d626669eaa7f7c
     *
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bizId'       => 'BizId',
        'displayDate' => 'DisplayDate',
        'endDate'     => 'EndDate',
        'extInfo'     => 'ExtInfo',
        'id'          => 'Id',
        'startDate'   => 'StartDate',
        'subBizCode'  => 'SubBizCode',
        'title'       => 'Title',
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
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
