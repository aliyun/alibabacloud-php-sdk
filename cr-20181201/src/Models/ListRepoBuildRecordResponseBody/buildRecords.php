<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\ListRepoBuildRecordResponseBody\buildRecords\image;

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
        'buildStatus' => 'BuildStatus',
        'endTime' => 'EndTime',
        'image' => 'Image',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->image) {
            $this->image->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
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
