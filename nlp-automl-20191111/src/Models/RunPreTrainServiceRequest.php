<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class RunPreTrainServiceRequest extends Model
{
    /**
     * @var string
     */
    public $predictContent;

    /**
     * @example ReviewAnalysis
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example V1
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'predictContent' => 'PredictContent',
        'serviceName'    => 'ServiceName',
        'serviceVersion' => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predictContent) {
            $res['PredictContent'] = $this->predictContent;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPreTrainServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredictContent'])) {
            $model->predictContent = $map['PredictContent'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
