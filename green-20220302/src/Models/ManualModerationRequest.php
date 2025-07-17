<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class ManualModerationRequest extends Model
{
    /**
     * @description Service.
     *
     * @example imageManualCheck
     *
     * @var string
     */
    public $service;

    /**
     * @description Parameter set required for the review service, in JSON string format.
     * - url: The URL of the object to be checked. Please ensure that this URL is publicly accessible.
     * - dataId: Optional, the data ID corresponding to the object being checked.
     *
     * @example {"url": "https://talesofai.oss-cn-shanghai.aliyuncs.com/xxx.mp4", "dataId": "data1234"}
     *
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'service' => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ManualModerationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
