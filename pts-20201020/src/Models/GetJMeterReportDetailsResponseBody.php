<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponseBody\reportOverView;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponseBody\samplerMetricsList;
use AlibabaCloud\SDK\PTS\V20201020\Models\GetJMeterReportDetailsResponseBody\sceneMetrics;
use AlibabaCloud\Tea\Model;

class GetJMeterReportDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeKey;

    /**
     * @var string
     */
    public $documentUrl;

    /**
     * @var string
     */
    public $dynamicCtx;

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
     * @var samplerMetricsList[]
     */
    public $samplerMetricsList;

    /**
     * @var sceneMetrics
     */
    public $sceneMetrics;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'codeKey'            => 'CodeKey',
        'documentUrl'        => 'DocumentUrl',
        'dynamicCtx'         => 'DynamicCtx',
        'httpStatusCode'     => 'HttpStatusCode',
        'message'            => 'Message',
        'reportOverView'     => 'ReportOverView',
        'requestId'          => 'RequestId',
        'samplerMetricsList' => 'SamplerMetricsList',
        'sceneMetrics'       => 'SceneMetrics',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeKey) {
            $res['CodeKey'] = $this->codeKey;
        }
        if (null !== $this->documentUrl) {
            $res['DocumentUrl'] = $this->documentUrl;
        }
        if (null !== $this->dynamicCtx) {
            $res['DynamicCtx'] = $this->dynamicCtx;
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
        if (null !== $this->samplerMetricsList) {
            $res['SamplerMetricsList'] = [];
            if (null !== $this->samplerMetricsList && \is_array($this->samplerMetricsList)) {
                $n = 0;
                foreach ($this->samplerMetricsList as $item) {
                    $res['SamplerMetricsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sceneMetrics) {
            $res['SceneMetrics'] = null !== $this->sceneMetrics ? $this->sceneMetrics->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJMeterReportDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeKey'])) {
            $model->codeKey = $map['CodeKey'];
        }
        if (isset($map['DocumentUrl'])) {
            $model->documentUrl = $map['DocumentUrl'];
        }
        if (isset($map['DynamicCtx'])) {
            $model->dynamicCtx = $map['DynamicCtx'];
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
        if (isset($map['SamplerMetricsList'])) {
            if (!empty($map['SamplerMetricsList'])) {
                $model->samplerMetricsList = [];
                $n                         = 0;
                foreach ($map['SamplerMetricsList'] as $item) {
                    $model->samplerMetricsList[$n++] = null !== $item ? samplerMetricsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SceneMetrics'])) {
            $model->sceneMetrics = sceneMetrics::fromMap($map['SceneMetrics']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
