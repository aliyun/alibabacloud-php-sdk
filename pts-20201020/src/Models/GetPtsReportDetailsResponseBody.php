<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\apiMetricsList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\reportOverView;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneMetrics;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot;

class GetPtsReportDetailsResponseBody extends Model
{
    /**
     * @var apiMetricsList[]
     */
    public $apiMetricsList;

    /**
     * @var string
     */
    public $code;

    /**
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
     * @var bool
     */
    public $success;
    protected $_name = [
        'apiMetricsList' => 'ApiMetricsList',
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'reportOverView' => 'ReportOverView',
        'requestId' => 'RequestId',
        'sceneMetrics' => 'SceneMetrics',
        'sceneSnapShot' => 'SceneSnapShot',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->apiMetricsList)) {
            Model::validateArray($this->apiMetricsList);
        }
        if (null !== $this->reportOverView) {
            $this->reportOverView->validate();
        }
        if (null !== $this->sceneMetrics) {
            $this->sceneMetrics->validate();
        }
        if (null !== $this->sceneSnapShot) {
            $this->sceneSnapShot->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiMetricsList) {
            if (\is_array($this->apiMetricsList)) {
                $res['ApiMetricsList'] = [];
                $n1 = 0;
                foreach ($this->apiMetricsList as $item1) {
                    $res['ApiMetricsList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['ReportOverView'] = null !== $this->reportOverView ? $this->reportOverView->toArray($noStream) : $this->reportOverView;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneMetrics) {
            $res['SceneMetrics'] = null !== $this->sceneMetrics ? $this->sceneMetrics->toArray($noStream) : $this->sceneMetrics;
        }

        if (null !== $this->sceneSnapShot) {
            $res['SceneSnapShot'] = null !== $this->sceneSnapShot ? $this->sceneSnapShot->toArray($noStream) : $this->sceneSnapShot;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ApiMetricsList'])) {
            if (!empty($map['ApiMetricsList'])) {
                $model->apiMetricsList = [];
                $n1 = 0;
                foreach ($map['ApiMetricsList'] as $item1) {
                    $model->apiMetricsList[$n1] = apiMetricsList::fromMap($item1);
                    ++$n1;
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
