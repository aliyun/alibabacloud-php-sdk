<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters\addons;

use AlibabaCloud\Tea\Model;

class servicesSpec extends Model
{
    /**
     * @example URL
     *
     * @var string
     */
    public $serviceAccessType;

    /**
     * @example https://47.96.xx.xx:12008
     *
     * @var string
     */
    public $serviceAccessUrl;

    /**
     * @description This parameter is required.
     *
     * @example Web Portal
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceAccessType' => 'ServiceAccessType',
        'serviceAccessUrl'  => 'ServiceAccessUrl',
        'serviceName'       => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceAccessType) {
            $res['ServiceAccessType'] = $this->serviceAccessType;
        }
        if (null !== $this->serviceAccessUrl) {
            $res['ServiceAccessUrl'] = $this->serviceAccessUrl;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servicesSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceAccessType'])) {
            $model->serviceAccessType = $map['ServiceAccessType'];
        }
        if (isset($map['ServiceAccessUrl'])) {
            $model->serviceAccessUrl = $map['ServiceAccessUrl'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
