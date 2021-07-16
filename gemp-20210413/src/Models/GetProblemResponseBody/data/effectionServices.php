<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class effectionServices extends Model
{
    /**
     * @description 服务ID
     *
     * @var int
     */
    public $effectionServiceId;

    /**
     * @description 影响等级 P1 . P2 P3 P4
     *
     * @var int
     */
    public $effectionLevel;

    /**
     * @description 影响服务状态  RECOVERED 已经恢复 ,UN_RECOVERED 未恢复
     *
     * @var int
     */
    public $effectionStatus;

    /**
     * @description 影响描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 服务名称
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'effectionServiceId' => 'effectionServiceId',
        'effectionLevel'     => 'effectionLevel',
        'effectionStatus'    => 'effectionStatus',
        'description'        => 'description',
        'serviceName'        => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectionServiceId) {
            $res['effectionServiceId'] = $this->effectionServiceId;
        }
        if (null !== $this->effectionLevel) {
            $res['effectionLevel'] = $this->effectionLevel;
        }
        if (null !== $this->effectionStatus) {
            $res['effectionStatus'] = $this->effectionStatus;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['effectionServiceId'])) {
            $model->effectionServiceId = $map['effectionServiceId'];
        }
        if (isset($map['effectionLevel'])) {
            $model->effectionLevel = $map['effectionLevel'];
        }
        if (isset($map['effectionStatus'])) {
            $model->effectionStatus = $map['effectionStatus'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
