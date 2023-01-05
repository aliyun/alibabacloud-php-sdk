<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreatePictureSearchJobRequest extends Model
{
    /**
     * @example 3e429560124b44b685095df81a27****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example 0.9
     *
     * @var float
     */
    public $bodyThreshold;

    /**
     * @example 1614327915000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pictureSearchType;

    /**
     * @example http://xxx.xxx/1.jpg
     *
     * @var string
     */
    public $searchPicUrl;

    /**
     * @example 1614227915000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'appInstanceId'     => 'AppInstanceId',
        'bodyThreshold'     => 'BodyThreshold',
        'endTime'           => 'EndTime',
        'pictureSearchType' => 'PictureSearchType',
        'searchPicUrl'      => 'SearchPicUrl',
        'startTime'         => 'StartTime',
        'threshold'         => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->bodyThreshold) {
            $res['BodyThreshold'] = $this->bodyThreshold;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pictureSearchType) {
            $res['PictureSearchType'] = $this->pictureSearchType;
        }
        if (null !== $this->searchPicUrl) {
            $res['SearchPicUrl'] = $this->searchPicUrl;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePictureSearchJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['BodyThreshold'])) {
            $model->bodyThreshold = $map['BodyThreshold'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PictureSearchType'])) {
            $model->pictureSearchType = $map['PictureSearchType'];
        }
        if (isset($map['SearchPicUrl'])) {
            $model->searchPicUrl = $map['SearchPicUrl'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
