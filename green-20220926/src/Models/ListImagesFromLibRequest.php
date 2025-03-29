<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ListImagesFromLibRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $imgId;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sort;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endDate' => 'EndDate',
        'imgId' => 'ImgId',
        'libId' => 'LibId',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->sort)) {
            Model::validateArray($this->sort);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->imgId) {
            $res['ImgId'] = $this->imgId;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sort) {
            if (\is_array($this->sort)) {
                $res['Sort'] = [];
                foreach ($this->sort as $key1 => $value1) {
                    $res['Sort'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ImgId'])) {
            $model->imgId = $map['ImgId'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Sort'])) {
            if (!empty($map['Sort'])) {
                $model->sort = [];
                foreach ($map['Sort'] as $key1 => $value1) {
                    $model->sort[$key1] = $value1;
                }
            }
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
