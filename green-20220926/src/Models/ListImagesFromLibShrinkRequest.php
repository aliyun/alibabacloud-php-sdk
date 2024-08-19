<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ListImagesFromLibShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 2023-08-24 10:01:55
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 112
     *
     * @var string
     */
    public $imgId;

    /**
     * @example custom_xxxx
     *
     * @var string
     */
    public $libId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortShrink;

    /**
     * @example 2023-08-11 09:00:19
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endDate'     => 'EndDate',
        'imgId'       => 'ImgId',
        'libId'       => 'LibId',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'sortShrink'  => 'Sort',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->sortShrink) {
            $res['Sort'] = $this->sortShrink;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesFromLibShrinkRequest
     */
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
            $model->sortShrink = $map['Sort'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
