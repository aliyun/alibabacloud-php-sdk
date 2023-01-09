<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\apiMetricsList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\reportOverView;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneMetrics;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot;
use AlibabaCloud\Tea\Model;

class GetPtsReportDetailsResponseBody extends Model
{
    /**
     * @var apiMetricsList[]
     */
    public $apiMetricsList;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var reportOverView
     */
    public $reportOverView;

    /**
     * @example DC4E3177-6745-4925-B423-4E89VV34221A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sceneMetrics
     */
    public $sceneMetrics;

    /**
     * @var sceneSnapShot
     */
    public $sceneSnapShot;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'apiMetricsList' => 'ApiMetricsList',
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'reportOverView' => 'ReportOverView',
        'requestId'      => 'RequestId',
        'sceneMetrics'   => 'SceneMetrics',
        'sceneSnapShot'  => 'SceneSnapShot',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiMetricsList) {
            $res['ApiMetricsList'] = [];
            if (null !== $this->apiMetricsList && \is_array($this->apiMetricsList)) {
                $n = 0;
                foreach ($this->apiMetricsList as $item) {
                    $res['ApiMetricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reportOverView) {
            $res['ReportOverView'] = null !== $this->reportOverView ? $this->reportOverView->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneMetrics) {
            $res['SceneMetrics'] = null !== $this->sceneMetrics ? $this->sceneMetrics->toMap() : null;
        }
        if (null !== $this->sceneSnapShot) {
            $res['SceneSnapShot'] = null !== $this->sceneSnapShot ? $this->sceneSnapShot->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPtsReportDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiMetricsList'])) {
            if (!empty($map['ApiMetricsList'])) {
                $model->apiMetricsList = [];
                $n                     = 0;
                foreach ($map['ApiMetricsList'] as $item) {
                    $model->apiMetricsList[$n++] = null !== $item ? apiMetricsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ReportOverView'])) {
            $model->reportOverView = reportOverView::fromMap($map['ReportOverView']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneMetrics'])) {
            $model->sceneMetrics = sceneMetrics::fromMap($map['SceneMetrics']);
        }
        if (isset($map['SceneSnapShot'])) {
            $model->sceneSnapShot = sceneSnapShot::fromMap($map['SceneSnapShot']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
