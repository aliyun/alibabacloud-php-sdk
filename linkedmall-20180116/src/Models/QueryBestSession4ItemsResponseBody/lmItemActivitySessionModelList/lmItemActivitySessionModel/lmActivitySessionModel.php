<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBestSession4ItemsResponseBody\lmItemActivitySessionModelList\lmItemActivitySessionModel;

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
    public $endDate;

    /**
     * @var string
     */
    public $displayDate;

    /**
     * @var int
     */
    public $lmSessionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[]
     */
    public $extInfo;
    protected $_name = [
        'subBizCode'   => 'SubBizCode',
        'endDate'      => 'EndDate',
        'displayDate'  => 'DisplayDate',
        'lmSessionId'  => 'LmSessionId',
        'description'  => 'Description',
        'startDate'    => 'StartDate',
        'lmActivityId' => 'LmActivityId',
        'bizId'        => 'BizId',
        'name'         => 'Name',
        'extInfo'      => 'ExtInfo',
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
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
