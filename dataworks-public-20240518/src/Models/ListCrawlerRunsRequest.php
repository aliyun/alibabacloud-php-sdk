<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListCrawlerRunsRequest extends Model
{
    /**
     * @var int
     */
    public $id;

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
    public $startTimeFrom;

    /**
     * @var int
     */
    public $startTimeTo;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'id' => 'Id',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'startTimeFrom' => 'StartTimeFrom',
        'startTimeTo' => 'StartTimeTo',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startTimeFrom) {
            $res['StartTimeFrom'] = $this->startTimeFrom;
        }

        if (null !== $this->startTimeTo) {
            $res['StartTimeTo'] = $this->startTimeTo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartTimeFrom'])) {
            $model->startTimeFrom = $map['StartTimeFrom'];
        }

        if (isset($map['StartTimeTo'])) {
            $model->startTimeTo = $map['StartTimeTo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
