<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardRequest extends Model
{
    /**
     * @var int
     */
    public $startDate;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'startDate' => 'StartDate',
        'endDate'   => 'EndDate',
        'traceId'   => 'TraceId',
        'sceneId'   => 'SceneId',
        'page'      => 'Page',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
