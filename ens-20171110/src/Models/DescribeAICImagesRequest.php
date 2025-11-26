<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeAICImagesRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $maxDate;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'imageId' => 'ImageId',
        'imageType' => 'ImageType',
        'imageUrl' => 'ImageUrl',
        'maxDate' => 'MaxDate',
        'minDate' => 'MinDate',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }

        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }

        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
