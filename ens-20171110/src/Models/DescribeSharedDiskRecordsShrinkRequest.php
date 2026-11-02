<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSharedDiskRecordsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $diskIdsShrink;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $namespacesShrink;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $sdgIdsShrink;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'diskIdsShrink' => 'DiskIds',
        'endTime' => 'EndTime',
        'namespacesShrink' => 'Namespaces',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIdsShrink' => 'RegionIds',
        'sdgIdsShrink' => 'SdgIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskIdsShrink) {
            $res['DiskIds'] = $this->diskIdsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->namespacesShrink) {
            $res['Namespaces'] = $this->namespacesShrink;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }

        if (null !== $this->sdgIdsShrink) {
            $res['SdgIds'] = $this->sdgIdsShrink;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DiskIds'])) {
            $model->diskIdsShrink = $map['DiskIds'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Namespaces'])) {
            $model->namespacesShrink = $map['Namespaces'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }

        if (isset($map['SdgIds'])) {
            $model->sdgIdsShrink = $map['SdgIds'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
