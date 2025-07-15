<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPropertiesResponseBody\data\miaosouConfig;

use AlibabaCloud\Tea\Model;

class modelInfos extends Model
{
    /**
     * @example quanmiao-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 全妙-Max
     *
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
