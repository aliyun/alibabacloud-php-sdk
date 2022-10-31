<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest;

use AlibabaCloud\Tea\Model;

class showList extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $liveInputType;

    /**
     * @var int
     */
    public $repeatTimes;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceUrl;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'duration'      => 'duration',
        'liveInputType' => 'liveInputType',
        'repeatTimes'   => 'repeatTimes',
        'resourceId'    => 'resourceId',
        'resourceType'  => 'resourceType',
        'resourceUrl'   => 'resourceUrl',
        'showName'      => 'showName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->liveInputType) {
            $res['liveInputType'] = $this->liveInputType;
        }
        if (null !== $this->repeatTimes) {
            $res['repeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUrl) {
            $res['resourceUrl'] = $this->resourceUrl;
        }
        if (null !== $this->showName) {
            $res['showName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return showList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['liveInputType'])) {
            $model->liveInputType = $map['liveInputType'];
        }
        if (isset($map['repeatTimes'])) {
            $model->repeatTimes = $map['repeatTimes'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['resourceUrl'])) {
            $model->resourceUrl = $map['resourceUrl'];
        }
        if (isset($map['showName'])) {
            $model->showName = $map['showName'];
        }

        return $model;
    }
}
