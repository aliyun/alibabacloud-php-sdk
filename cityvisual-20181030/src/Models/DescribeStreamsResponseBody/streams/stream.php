<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeStreamsResponseBody\streams;

use AlibabaCloud\Tea\Model;

class stream extends Model
{
    /**
     * @var int
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $computeJobId;

    /**
     * @var int
     */
    public $objCount;

    /**
     * @var int
     */
    public $delayMS;

    /**
     * @var string
     */
    public $streamURL;
    protected $_name = [
        'jobGroupId'   => 'JobGroupId',
        'streamName'   => 'StreamName',
        'computeJobId' => 'ComputeJobId',
        'objCount'     => 'ObjCount',
        'delayMS'      => 'DelayMS',
        'streamURL'    => 'StreamURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->computeJobId) {
            $res['ComputeJobId'] = $this->computeJobId;
        }
        if (null !== $this->objCount) {
            $res['ObjCount'] = $this->objCount;
        }
        if (null !== $this->delayMS) {
            $res['DelayMS'] = $this->delayMS;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stream
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['ComputeJobId'])) {
            $model->computeJobId = $map['ComputeJobId'];
        }
        if (isset($map['ObjCount'])) {
            $model->objCount = $map['ObjCount'];
        }
        if (isset($map['DelayMS'])) {
            $model->delayMS = $map['DelayMS'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }

        return $model;
    }
}
