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
    public $buildRecordId;

    /**
     * @var string
     */
    public $buildStatus;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'buildRecordId' => 'BuildRecordId',
        'buildStatus'   => 'BuildStatus',
        'endTime'       => 'EndTime',
        'image'         => 'Image',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildRecordId) {
            $res['BuildRecordId'] = $this->buildRecordId;
        }
        if (null !== $this->buildStatus) {
            $res['BuildStatus'] = $this->buildStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['BuildRecordId'])) {
            $model->buildRecordId = $map['BuildRecordId'];
        }
        if (isset($map['BuildStatus'])) {
            $model->buildStatus = $map['BuildStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
