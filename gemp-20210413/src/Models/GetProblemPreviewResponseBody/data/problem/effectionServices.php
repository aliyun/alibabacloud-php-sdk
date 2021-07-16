<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem;

use AlibabaCloud\Tea\Model;

class effectionServices extends Model
{
    /**
     * @description 影响服务名称
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 影响服务Id
     *
     * @var int
     */
    public $serviceId;
    protected $_name = [
        'serviceName' => 'serviceName',
        'serviceId'   => 'serviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
