<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class effectionServices extends Model
{
    /**
     * @example 描述
     *
     * @var string
     */
    public $description;

    /**
     * @example P1
     *
     * @var int
     */
    public $effectionLevel;

    /**
     * @example 1
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @example RESTORED
     *
     * @var int
     */
    public $effectionStatus;

    /**
     * @var int
     */
    public $serviceDeleteType;

    /**
     * @example 购物车
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'description'        => 'description',
        'effectionLevel'     => 'effectionLevel',
        'effectionServiceId' => 'effectionServiceId',
        'effectionStatus'    => 'effectionStatus',
        'serviceDeleteType'  => 'serviceDeleteType',
        'serviceName'        => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->effectionLevel) {
            $res['effectionLevel'] = $this->effectionLevel;
        }
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->effectionStatus) {
            $res['effectionStatus'] = $this->effectionStatus;
        }
        if (null !== $this->serviceDeleteType) {
            $res['serviceDeleteType'] = $this->serviceDeleteType;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['effectionLevel'])) {
            $model->effectionLevel = $map['effectionLevel'];
        }
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['effectionStatus'])) {
            $model->effectionStatus = $map['effectionStatus'];
        }
        if (isset($map['serviceDeleteType'])) {
            $model->serviceDeleteType = $map['serviceDeleteType'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
