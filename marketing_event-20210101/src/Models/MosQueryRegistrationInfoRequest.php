<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Dara\Model;

class MosQueryRegistrationInfoRequest extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $checkinStatus;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $page;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $qrCode;
    protected $_name = [
        'activityId' => 'ActivityId',
        'checkinStatus' => 'CheckinStatus',
        'keyword' => 'Keyword',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'qrCode' => 'QrCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->checkinStatus) {
            $res['CheckinStatus'] = $this->checkinStatus;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->qrCode) {
            $res['QrCode'] = $this->qrCode;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['CheckinStatus'])) {
            $model->checkinStatus = $map['CheckinStatus'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QrCode'])) {
            $model->qrCode = $map['QrCode'];
        }

        return $model;
    }
}
