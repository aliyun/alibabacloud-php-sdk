<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\AddClusterServiceRequest;

use AlibabaCloud\Tea\Model;

class service extends Model
{
    /**
     * @example HDFS
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'serviceName'    => 'ServiceName',
        'serviceVersion' => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return service
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
