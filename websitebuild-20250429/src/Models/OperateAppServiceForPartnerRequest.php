<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Tea\Model;

class OperateAppServiceForPartnerRequest extends Model
{
    /**
     * @example WS00001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {\\"user_device_id\\":\\"6bef45cb0c76de284d24de074c088b73\\"}\\n
     *
     * @var string
     */
    public $extend;

    /**
     * @example SERVICE_FINISH
     *
     * @var string
     */
    public $operateEvent;

    /**
     * @example WEBSITE_DESIGN
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'bizId' => 'BizId',
        'extend' => 'Extend',
        'operateEvent' => 'OperateEvent',
        'serviceType' => 'ServiceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->operateEvent) {
            $res['OperateEvent'] = $this->operateEvent;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateAppServiceForPartnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['OperateEvent'])) {
            $model->operateEvent = $map['OperateEvent'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
