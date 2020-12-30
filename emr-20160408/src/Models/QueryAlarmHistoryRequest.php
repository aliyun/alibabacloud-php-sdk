<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class QueryAlarmHistoryRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $startTimeStamp;

    /**
     * @var int
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'clusterId'       => 'ClusterId',
        'startTimeStamp'  => 'StartTimeStamp',
        'endTimeStamp'    => 'EndTimeStamp',
        'cursor'          => 'Cursor',
        'size'            => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAlarmHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
