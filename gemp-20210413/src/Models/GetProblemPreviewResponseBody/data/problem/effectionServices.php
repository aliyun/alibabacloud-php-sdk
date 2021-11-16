<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem;

use AlibabaCloud\Tea\Model;

class effectionServices extends Model
{
    /**
     * @description 影响服务Id
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description 影响服务名称
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'serviceId'   => 'serviceId',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return effectionServices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
