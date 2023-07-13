<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateThingScriptRequest extends Model
{
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
     * @description The **ProductKey** of the product.
     *
     * You can view the **ProductKey** on the Product Details page of the IoT Platform console. You can also obtain the ProductKey by calling the [QueryProductList](~~69271~~) operation.
     * @example a1Q5XoY****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The content of the script. You must specify this parameter.
     *
     * For more information about script examples, see [What is data parsing](~~68702~~).
     * @example "function protocolToRawData(jsonObj) {return rawdata; }function rawDataToProtocol(rawData) {return jsonObj; }"
     *
     * @var string
     */
    public $scriptContent;

    /**
     * @description The type of the script. Valid values:
     *
     *   JavaScript
     *   Python\_27: Python 2.7
     *   PHP\_72: PHP 7.2
     *
     * @example JavaScript
     *
     * @var string
     */
    public $scriptType;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKey'    => 'ProductKey',
        'scriptContent' => 'ScriptContent',
        'scriptType'    => 'ScriptType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateThingScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }

        return $model;
    }
}
