<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskEventsResponseBody;

use AlibabaCloud\Tea\Model;

class diskEvents extends Model
{
    /**
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @example d-bp1bq5g3dxxo1x4o****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example NoAction
     *
     * @var string
     */
    public $recommendAction;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Solved
     *
     * @var string
     */
    public $status;

    /**
     * @example 2022-06-01T08:00:00Z
     *
     * @var string
     */
    public $timestamp;

    /**
     * @example DataNeedProtect
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'     => 'Description',
        'diskId'          => 'DiskId',
        'recommendAction' => 'RecommendAction',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'timestamp'       => 'Timestamp',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->recommendAction) {
            $res['RecommendAction'] = $this->recommendAction;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['RecommendAction'])) {
            $model->recommendAction = $map['RecommendAction'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
