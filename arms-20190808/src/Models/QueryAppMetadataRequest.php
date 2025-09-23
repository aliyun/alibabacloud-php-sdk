<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class QueryAppMetadataRequest extends Model
{
    /**
     * @var int
     */
    public $endTimeMs;

    /**
     * @var string
     */
    public $metaIds;

    /**
     * @var string
     */
    public $metaType;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTimeMs;
    protected $_name = [
        'endTimeMs' => 'EndTimeMs',
        'metaIds' => 'MetaIds',
        'metaType' => 'MetaType',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'startTimeMs' => 'StartTimeMs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeMs) {
            $res['EndTimeMs'] = $this->endTimeMs;
        }

        if (null !== $this->metaIds) {
            $res['MetaIds'] = $this->metaIds;
        }

        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTimeMs) {
            $res['StartTimeMs'] = $this->startTimeMs;
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
        if (isset($map['EndTimeMs'])) {
            $model->endTimeMs = $map['EndTimeMs'];
        }

        if (isset($map['MetaIds'])) {
            $model->metaIds = $map['MetaIds'];
        }

        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTimeMs'])) {
            $model->startTimeMs = $map['StartTimeMs'];
        }

        return $model;
    }
}
