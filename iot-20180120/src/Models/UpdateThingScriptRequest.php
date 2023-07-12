<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateThingScriptRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $scriptContent;

    /**
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
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('scriptContent', $this->scriptContent, true);
        Model::validateRequired('scriptType', $this->scriptType, true);
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
