<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceGroupRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example ID2
     *
     * @var string
     */
    public $authorizeType;

    /**
     * @example 981184817831****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $deviceGroupName;

    /**
     * @example hKpHMh2****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'apiVersion'      => 'ApiVersion',
        'authorizeType'   => 'AuthorizeType',
        'bizChainId'      => 'BizChainId',
        'deviceGroupName' => 'DeviceGroupName',
        'productKey'      => 'ProductKey',
        'remark'          => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->authorizeType) {
            $res['AuthorizeType'] = $this->authorizeType;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['AuthorizeType'])) {
            $model->authorizeType = $map['AuthorizeType'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
