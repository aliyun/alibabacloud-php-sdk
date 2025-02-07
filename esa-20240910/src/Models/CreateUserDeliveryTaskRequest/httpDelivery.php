<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateUserDeliveryTaskRequest\httpDelivery\standardAuthParam;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryHeaderParamValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryQueryParamValue;

class httpDelivery extends Model
{
    /**
     * @var string
     */
    public $compress;
    /**
     * @var string
     */
    public $destUrl;
    /**
     * @var HttpDeliveryHeaderParamValue[]
     */
    public $headerParam;
    /**
     * @var string
     */
    public $lastLogSplit;
    /**
     * @var string
     */
    public $logBodyPrefix;
    /**
     * @var string
     */
    public $logBodySuffix;
    /**
     * @var string
     */
    public $logSplit;
    /**
     * @var string
     */
    public $logSplitWords;
    /**
     * @var int
     */
    public $maxBackoffMS;
    /**
     * @var int
     */
    public $maxBatchMB;
    /**
     * @var int
     */
    public $maxBatchSize;
    /**
     * @var int
     */
    public $maxRetry;
    /**
     * @var int
     */
    public $minBackoffMS;
    /**
     * @var HttpDeliveryQueryParamValue[]
     */
    public $queryParam;
    /**
     * @var string
     */
    public $responseBodyKey;
    /**
     * @var bool
     */
    public $standardAuthOn;
    /**
     * @var standardAuthParam
     */
    public $standardAuthParam;
    /**
     * @var int
     */
    public $successCode;
    /**
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
        if (\is_array($this->headerParam)) {
            Model::validateArray($this->headerParam);
        }
        if (\is_array($this->queryParam)) {
            Model::validateArray($this->queryParam);
        }
        if (null !== $this->standardAuthParam) {
            $this->standardAuthParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }

        if (null !== $this->destUrl) {
            $res['DestUrl'] = $this->destUrl;
        }

        if (null !== $this->headerParam) {
            if (\is_array($this->headerParam)) {
                $res['HeaderParam'] = [];
                foreach ($this->headerParam as $key1 => $value1) {
                    $res['HeaderParam'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
            if (\is_array($this->queryParam)) {
                $res['QueryParam'] = [];
                foreach ($this->queryParam as $key1 => $value1) {
                    $res['QueryParam'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
            $res['StandardAuthParam'] = null !== $this->standardAuthParam ? $this->standardAuthParam->toArray($noStream) : $this->standardAuthParam;
        }

        if (null !== $this->successCode) {
            $res['SuccessCode'] = $this->successCode;
        }

        if (null !== $this->transformTimeout) {
            $res['TransformTimeout'] = $this->transformTimeout;
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
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }

        if (isset($map['DestUrl'])) {
            $model->destUrl = $map['DestUrl'];
        }

        if (isset($map['HeaderParam'])) {
            if (!empty($map['HeaderParam'])) {
                $model->headerParam = [];
                foreach ($map['HeaderParam'] as $key1 => $value1) {
                    $model->headerParam[$key1] = HttpDeliveryHeaderParamValue::fromMap($value1);
                }
            }
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
            if (!empty($map['QueryParam'])) {
                $model->queryParam = [];
                foreach ($map['QueryParam'] as $key1 => $value1) {
                    $model->queryParam[$key1] = HttpDeliveryQueryParamValue::fromMap($value1);
                }
            }
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
