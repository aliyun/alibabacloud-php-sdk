<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PictureSearchPictureRequest extends Model
{
    /**
     * @example 5a502d3fbab8410e8fd4be9037c7****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $containPicUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1614850651299
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $pictureSearchType;

    /**
     * @example http://***.***\/2393.jpg
     *
     * @var string
     */
    public $searchPicUrl;

    /**
     * @example 1614297000000
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
        'containPicUrl'     => 'ContainPicUrl',
        'currentPage'       => 'CurrentPage',
        'endTime'           => 'EndTime',
        'pageSize'          => 'PageSize',
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
        if (null !== $this->containPicUrl) {
            $res['ContainPicUrl'] = $this->containPicUrl;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return PictureSearchPictureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['ContainPicUrl'])) {
            $model->containPicUrl = $map['ContainPicUrl'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
