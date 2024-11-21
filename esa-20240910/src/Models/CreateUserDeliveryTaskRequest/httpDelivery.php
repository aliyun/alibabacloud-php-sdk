<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\httpDelivery\standardAuthParam;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryHeaderParamValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryQueryParamValue;
use AlibabaCloud\Tea\Model;

class httpDelivery extends Model
{
    /**
     * @description The compression method.
     *
     * @example gzip
     *
     * @var string
     */
    public $compress;

    /**
     * @description The address of the HTTP server.
     *
     * @example http://xxx.aliyun.com/v1/log/upload
     *
     * @var string
     */
    public $destUrl;

    /**
     * @description The custom headers.
     *
     * @var HttpDeliveryHeaderParamValue[]
     */
    public $headerParam;

    /**
     * @description The ending separator.
     *
     * @example \\n
     *
     * @var string
     */
    public $lastLogSplit;

    /**
     * @description The prefix of the log delivery package.
     *
     * @example cdnVersion:1.0
     *
     * @var string
     */
    public $logBodyPrefix;

    /**
     * @description The suffix of the log delivery package.
     *
     * @example cdnVersion:1.0
     *
     * @var string
     */
    public $logBodySuffix;

    /**
     * @description Specifies whether to enable log splitting. Default value: true.
     *
     * @example true
     *
     * @var string
     */
    public $logSplit;

    /**
     * @description The log separator.
     *
     * @example \\n
     *
     * @var string
     */
    public $logSplitWords;

    /**
     * @description The maximum backoff time. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxBackoffMS;

    /**
     * @description The maximum size of data for each delivery. Unit: MB.
     *
     * @example 5
     *
     * @var int
     */
    public $maxBatchMB;

    /**
     * @description The maximum number of entries for each delivery.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxBatchSize;

    /**
     * @description The maximum number of retries.
     *
     * @example 3
     *
     * @var int
     */
    public $maxRetry;

    /**
     * @description The minimum backoff time. Unit: milliseconds.
     *
     * @example 100
     *
     * @var int
     */
    public $minBackoffMS;

    /**
     * @description The custom query parameters.
     *
     * @var HttpDeliveryQueryParamValue[]
     */
    public $queryParam;

    /**
     * @description The response field key used for success check.
     *
     * @example err_code
     *
     * @var string
     */
    public $responseBodyKey;

    /**
     * @description Specifies whether to use server authentication.
     *
     * @example true
     *
     * @var bool
     */
    public $standardAuthOn;

    /**
     * @description The authentication configurations.
     *
     * @var standardAuthParam
     */
    public $standardAuthParam;

    /**
     * @description The custom code for a success.
     *
     * @example 200
     *
     * @var int
     */
    public $successCode;

    /**
     * @description The timeout period. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $transformTimeout;
    protected $_name = [
        'compress'          => 'Compress',
        'destUrl'           => 'DestUrl',
        'headerParam'       => 'HeaderParam',
        'lastLogSplit'      => 'LastLogSplit',
        'logBodyPrefix'     => 'LogBodyPrefix',
        'logBodySuffix'     => 'LogBodySuffix',
        'logSplit'          => 'LogSplit',
        'logSplitWords'     => 'LogSplitWords',
        'maxBackoffMS'      => 'MaxBackoffMS',
        'maxBatchMB'        => 'MaxBatchMB',
        'maxBatchSize'      => 'MaxBatchSize',
        'maxRetry'          => 'MaxRetry',
        'minBackoffMS'      => 'MinBackoffMS',
        'queryParam'        => 'QueryParam',
        'responseBodyKey'   => 'ResponseBodyKey',
        'standardAuthOn'    => 'StandardAuthOn',
        'standardAuthParam' => 'StandardAuthParam',
        'successCode'       => 'SuccessCode',
        'transformTimeout'  => 'TransformTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->destUrl) {
            $res['DestUrl'] = $this->destUrl;
        }
        if (null !== $this->headerParam) {
            $res['HeaderParam'] = [];
            if (null !== $this->headerParam && \is_array($this->headerParam)) {
                foreach ($this->headerParam as $key => $val) {
                    $res['HeaderParam'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->lastLogSplit) {
            $res['LastLogSplit'] = $this->lastLogSplit;
        }
        if (null !== $this->logBodyPrefix) {
            $res['LogBodyPrefix'] = $this->logBodyPrefix;
        }
        if (null !== $this->logBodySuffix) {
            $res['LogBodySuffix'] = $this->logBodySuffix;
        }
        if (null !== $this->logSplit) {
            $res['LogSplit'] = $this->logSplit;
        }
        if (null !== $this->logSplitWords) {
            $res['LogSplitWords'] = $this->logSplitWords;
        }
        if (null !== $this->maxBackoffMS) {
            $res['MaxBackoffMS'] = $this->maxBackoffMS;
        }
        if (null !== $this->maxBatchMB) {
            $res['MaxBatchMB'] = $this->maxBatchMB;
        }
        if (null !== $this->maxBatchSize) {
            $res['MaxBatchSize'] = $this->maxBatchSize;
        }
        if (null !== $this->maxRetry) {
            $res['MaxRetry'] = $this->maxRetry;
        }
        if (null !== $this->minBackoffMS) {
            $res['MinBackoffMS'] = $this->minBackoffMS;
        }
        if (null !== $this->queryParam) {
            $res['QueryParam'] = [];
            if (null !== $this->queryParam && \is_array($this->queryParam)) {
                foreach ($this->queryParam as $key => $val) {
                    $res['QueryParam'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->responseBodyKey) {
            $res['ResponseBodyKey'] = $this->responseBodyKey;
        }
        if (null !== $this->standardAuthOn) {
            $res['StandardAuthOn'] = $this->standardAuthOn;
        }
        if (null !== $this->standardAuthParam) {
            $res['StandardAuthParam'] = null !== $this->standardAuthParam ? $this->standardAuthParam->toMap() : null;
        }
        if (null !== $this->successCode) {
            $res['SuccessCode'] = $this->successCode;
        }
        if (null !== $this->transformTimeout) {
            $res['TransformTimeout'] = $this->transformTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpDelivery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['DestUrl'])) {
            $model->destUrl = $map['DestUrl'];
        }
        if (isset($map['HeaderParam'])) {
            $model->headerParam = $map['HeaderParam'];
        }
        if (isset($map['LastLogSplit'])) {
            $model->lastLogSplit = $map['LastLogSplit'];
        }
        if (isset($map['LogBodyPrefix'])) {
            $model->logBodyPrefix = $map['LogBodyPrefix'];
        }
        if (isset($map['LogBodySuffix'])) {
            $model->logBodySuffix = $map['LogBodySuffix'];
        }
        if (isset($map['LogSplit'])) {
            $model->logSplit = $map['LogSplit'];
        }
        if (isset($map['LogSplitWords'])) {
            $model->logSplitWords = $map['LogSplitWords'];
        }
        if (isset($map['MaxBackoffMS'])) {
            $model->maxBackoffMS = $map['MaxBackoffMS'];
        }
        if (isset($map['MaxBatchMB'])) {
            $model->maxBatchMB = $map['MaxBatchMB'];
        }
        if (isset($map['MaxBatchSize'])) {
            $model->maxBatchSize = $map['MaxBatchSize'];
        }
        if (isset($map['MaxRetry'])) {
            $model->maxRetry = $map['MaxRetry'];
        }
        if (isset($map['MinBackoffMS'])) {
            $model->minBackoffMS = $map['MinBackoffMS'];
        }
        if (isset($map['QueryParam'])) {
            $model->queryParam = $map['QueryParam'];
        }
        if (isset($map['ResponseBodyKey'])) {
            $model->responseBodyKey = $map['ResponseBodyKey'];
        }
        if (isset($map['StandardAuthOn'])) {
            $model->standardAuthOn = $map['StandardAuthOn'];
        }
        if (isset($map['StandardAuthParam'])) {
            $model->standardAuthParam = standardAuthParam::fromMap($map['StandardAuthParam']);
        }
        if (isset($map['SuccessCode'])) {
            $model->successCode = $map['SuccessCode'];
        }
        if (isset($map['TransformTimeout'])) {
            $model->transformTimeout = $map['TransformTimeout'];
        }

        return $model;
    }
}
