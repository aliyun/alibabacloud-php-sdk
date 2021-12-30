<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeSlinkTaskInfoRequest extends Model
{
    /**
     * @var int
     */
    public $failPageNumber;

    /**
     * @var int
     */
    public $failPageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slinkTaskId;

    /**
     * @var int
     */
    public $successPageNumber;

    /**
     * @var int
     */
    public $successPageSize;
    protected $_name = [
        'failPageNumber'    => 'FailPageNumber',
        'failPageSize'      => 'FailPageSize',
        'regionId'          => 'RegionId',
        'slinkTaskId'       => 'SlinkTaskId',
        'successPageNumber' => 'SuccessPageNumber',
        'successPageSize'   => 'SuccessPageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failPageNumber) {
            $res['FailPageNumber'] = $this->failPageNumber;
        }
        if (null !== $this->failPageSize) {
            $res['FailPageSize'] = $this->failPageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slinkTaskId) {
            $res['SlinkTaskId'] = $this->slinkTaskId;
        }
        if (null !== $this->successPageNumber) {
            $res['SuccessPageNumber'] = $this->successPageNumber;
        }
        if (null !== $this->successPageSize) {
            $res['SuccessPageSize'] = $this->successPageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlinkTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailPageNumber'])) {
            $model->failPageNumber = $map['FailPageNumber'];
        }
        if (isset($map['FailPageSize'])) {
            $model->failPageSize = $map['FailPageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlinkTaskId'])) {
            $model->slinkTaskId = $map['SlinkTaskId'];
        }
        if (isset($map['SuccessPageNumber'])) {
            $model->successPageNumber = $map['SuccessPageNumber'];
        }
        if (isset($map['SuccessPageSize'])) {
            $model->successPageSize = $map['SuccessPageSize'];
        }

        return $model;
    }
}
