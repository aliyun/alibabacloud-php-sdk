<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UnbindRequest extends Model
{
    /**
     * @description The ID of the delivery group. You can call the [GetConnectionTicket](~~GetConnectionTicket~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The session ID. You can call the [GetConnectionTicket](~~GetConnectionTicket~~) operation to obtain the ID.
     *
     * @example ai-d297eyf83g5ni****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The ID of the persistent session. You can call the [GetConnectionTicket](~~GetConnectionTicket~~) operation to obtain the ID.
     *
     * @example p-0bxls9m3cl7s****
     *
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @description The username.
     *
     * This parameter is required.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'endUserId' => 'EndUserId',
        'productType' => 'ProductType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
