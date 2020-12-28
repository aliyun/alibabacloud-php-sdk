<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class GetActivityTaskRequest extends Model
{
    /**
     * @var string
     */
    public $experimentTaskId;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $activityTaskId;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'experimentTaskId' => 'ExperimentTaskId',
        'nameSpace'        => 'NameSpace',
        'activityTaskId'   => 'ActivityTaskId',
        'ahasRegionId'     => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentTaskId) {
            $res['ExperimentTaskId'] = $this->experimentTaskId;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->activityTaskId) {
            $res['ActivityTaskId'] = $this->activityTaskId;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentTaskId'])) {
            $model->experimentTaskId = $map['ExperimentTaskId'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['ActivityTaskId'])) {
            $model->activityTaskId = $map['ActivityTaskId'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
