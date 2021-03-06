<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody\buildRecords\image;
use AlibabaCloud\Tea\Model;

class buildRecords extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $buildStatus;

    /**
     * @var string
     */
    public $buildRecordId;
    protected $_name = [
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'image'         => 'Image',
        'buildStatus'   => 'BuildStatus',
        'buildRecordId' => 'BuildRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->buildStatus) {
            $res['BuildStatus'] = $this->buildStatus;
        }
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['BuildStatus'])) {
            $model->buildStatus = $map['BuildStatus'];
        }
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }

        return $model;
    }
}
