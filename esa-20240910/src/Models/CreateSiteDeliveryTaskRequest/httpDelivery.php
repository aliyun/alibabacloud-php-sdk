<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteDeliveryTaskRequest\httpDelivery\standardAuthParam;
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
    public $logBodyPrefix;
    /**
     * @var string
     */
    public $logBodySuffix;
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
     * @var HttpDeliveryQueryParamValue[]
     */
    public $queryParam;
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
            if (\is_array($this->queryParam)) {
                $res['QueryParam'] = [];
                foreach ($this->queryParam as $key1 => $value1) {
                    $res['QueryParam'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->standardAuthOn) {
            $res['StandardAuthOn'] = $this->standardAuthOn;
        }

        if (null !== $this->standardAuthParam) {
            $res['StandardAuthParam'] = null !== $this->standardAuthParam ? $this->standardAuthParam->toArray($noStream) : $this->standardAuthParam;
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
            if (!empty($map['QueryParam'])) {
                $model->queryParam = [];
                foreach ($map['QueryParam'] as $key1 => $value1) {
                    $model->queryParam[$key1] = HttpDeliveryQueryParamValue::fromMap($value1);
                }
            }
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
