<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class AdvancePurgeObjectCacheShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $contentShrink;

    /**
     * @var bool
     */
    public $force;

    /**
     * @description This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $stations;

    /**
     * @var int
     */
    public $timeRangeBegin;

    /**
     * @var int
     */
    public $timeRangeEnd;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'           => 'Area',
        'contentShrink'  => 'Content',
        'force'          => 'Force',
        'siteId'         => 'SiteId',
        'stations'       => 'Stations',
        'timeRangeBegin' => 'TimeRangeBegin',
        'timeRangeEnd'   => 'TimeRangeEnd',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->contentShrink) {
            $res['Content'] = $this->contentShrink;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->stations) {
            $res['Stations'] = $this->stations;
        }
        if (null !== $this->timeRangeBegin) {
            $res['TimeRangeBegin'] = $this->timeRangeBegin;
        }
        if (null !== $this->timeRangeEnd) {
            $res['TimeRangeEnd'] = $this->timeRangeEnd;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdvancePurgeObjectCacheShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Content'])) {
            $model->contentShrink = $map['Content'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Stations'])) {
            $model->stations = $map['Stations'];
        }
        if (isset($map['TimeRangeBegin'])) {
            $model->timeRangeBegin = $map['TimeRangeBegin'];
        }
        if (isset($map['TimeRangeEnd'])) {
            $model->timeRangeEnd = $map['TimeRangeEnd'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
