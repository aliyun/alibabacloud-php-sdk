<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetEffectiveImageByIdResponseBody\data\imageInfoRegionModelList;

use AlibabaCloud\Dara\Model;

class imageRegionDistribute extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unitImageId;
    protected $_name = [
        'message' => 'Message',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'unitImageId' => 'UnitImageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unitImageId) {
            $res['UnitImageId'] = $this->unitImageId;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnitImageId'])) {
            $model->unitImageId = $map['UnitImageId'];
        }

        return $model;
    }
}
