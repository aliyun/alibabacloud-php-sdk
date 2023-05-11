<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateOTAModuleRequest extends Model
{
    /**
     * @description The new alias of the OTA module. The alias must be 1 to 64 characters in length, and can contain letters, digits, periods(.), hyphens (-), and underscores (\_).
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The new description of the OTA module. The description can be up to 100 characters in length.
     *
     * @var string
     */
    public $desc;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The name of the OTA module.
     *
     * @example barcodeScanner
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The **ProductKey** of the product to which the OTA module belongs.
     *
     * @example a1Le6d0****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'aliasName'     => 'AliasName',
        'desc'          => 'Desc',
        'iotInstanceId' => 'IotInstanceId',
        'moduleName'    => 'ModuleName',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOTAModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
