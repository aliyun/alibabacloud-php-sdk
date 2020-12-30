<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceRequest;

use AlibabaCloud\Tea\Model;

class service extends Model
{
    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceVersion' => 'ServiceVersion',
        'serviceName'    => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return service
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
