<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\httpDelivery\standardAuthParam;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryHeaderParamValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\HttpDeliveryQueryParamValue;
use AlibabaCloud\Tea\Model;

class httpDelivery extends Model
{
    /**
     * @description The compression method. By default, data is not compressed.
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
     * @description The custom query parameters.
     *
     * @var HttpDeliveryQueryParamValue[]
     */
    public $queryParam;

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
        'logBodyPrefix'     => 'LogBodyPrefix',
        'logBodySuffix'     => 'LogBodySuffix',
        'maxBatchMB'        => 'MaxBatchMB',
        'maxBatchSize'      => 'MaxBatchSize',
        'maxRetry'          => 'MaxRetry',
        'queryParam'        => 'QueryParam',
        'standardAuthOn'    => 'StandardAuthOn',
        'standardAuthParam' => 'StandardAuthParam',
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
        if (null !== $this->logBodyPrefix) {
            $res['LogBodyPrefix'] = $this->logBodyPrefix;
        }
        if (null !== $this->logBodySuffix) {
            $res['LogBodySuffix'] = $this->logBodySuffix;
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
        if (null !== $this->queryParam) {
            $res['QueryParam'] = [];
            if (null !== $this->queryParam && \is_array($this->queryParam)) {
                foreach ($this->queryParam as $key => $val) {
                    $res['QueryParam'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->standardAuthOn) {
            $res['StandardAuthOn'] = $this->standardAuthOn;
        }
        if (null !== $this->standardAuthParam) {
            $res['StandardAuthParam'] = null !== $this->standardAuthParam ? $this->standardAuthParam->toMap() : null;
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
        if (isset($map['LogBodyPrefix'])) {
            $model->logBodyPrefix = $map['LogBodyPrefix'];
        }
        if (isset($map['LogBodySuffix'])) {
            $model->logBodySuffix = $map['LogBodySuffix'];
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
        if (isset($map['QueryParam'])) {
            $model->queryParam = $map['QueryParam'];
        }
        if (isset($map['StandardAuthOn'])) {
            $model->standardAuthOn = $map['StandardAuthOn'];
        }
        if (isset($map['StandardAuthParam'])) {
            $model->standardAuthParam = standardAuthParam::fromMap($map['StandardAuthParam']);
        }
        if (isset($map['TransformTimeout'])) {
            $model->transformTimeout = $map['TransformTimeout'];
        }

        return $model;
    }
}
