<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceParametersMap;

use AlibabaCloud\Tea\Model;

class serviceParameterMap extends Model
{
    /**
     * @description The name of the front-end input parameter.
     *
     * @example sex
     *
     * @var string
     */
    public $requestParameterName;

    /**
     * @description The name of the backend service parameter.
     *
     * @example sex
     *
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'requestParameterName' => 'RequestParameterName',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParameterName) {
            $res['RequestParameterName'] = $this->requestParameterName;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParameterMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParameterName'])) {
            $model->requestParameterName = $map['RequestParameterName'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
