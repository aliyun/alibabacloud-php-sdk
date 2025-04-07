<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CreateImageFromAppInstanceGroupRequest extends Model
{
    /**
     * @description The image name.
     *
     * This parameter is required.
     *
     * @example test_name
     *
     * @var string
     */
    public $appCenterImageName;

    /**
     * @description The ID of the delivery group. You can call the [ListAppInstanceGroup](https://help.aliyun.com/document_detail/428506.html) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

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
        'appCenterImageName' => 'AppCenterImageName',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'productType' => 'ProductType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCenterImageName) {
            $res['AppCenterImageName'] = $this->appCenterImageName;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageFromAppInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCenterImageName'])) {
            $model->appCenterImageName = $map['AppCenterImageName'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
