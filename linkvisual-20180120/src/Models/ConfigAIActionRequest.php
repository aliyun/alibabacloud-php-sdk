<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\ConfigAIActionRequest\dataTypeConfigList;
use AlibabaCloud\Tea\Model;

class ConfigAIActionRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $actionId;

    /**
     * @var dataTypeConfigList[]
     */
    public $dataTypeConfigList;

    /**
     * @var string
     */
    public $algoConfig;
    protected $_name = [
        'apiProduct'         => 'ApiProduct',
        'apiRevision'        => 'ApiRevision',
        'actionId'           => 'ActionId',
        'dataTypeConfigList' => 'DataTypeConfigList',
        'algoConfig'         => 'AlgoConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->dataTypeConfigList) {
            $res['DataTypeConfigList'] = [];
            if (null !== $this->dataTypeConfigList && \is_array($this->dataTypeConfigList)) {
                $n = 0;
                foreach ($this->dataTypeConfigList as $item) {
                    $res['DataTypeConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->algoConfig) {
            $res['AlgoConfig'] = $this->algoConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigAIActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['DataTypeConfigList'])) {
            if (!empty($map['DataTypeConfigList'])) {
                $model->dataTypeConfigList = [];
                $n                         = 0;
                foreach ($map['DataTypeConfigList'] as $item) {
                    $model->dataTypeConfigList[$n++] = null !== $item ? dataTypeConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlgoConfig'])) {
            $model->algoConfig = $map['AlgoConfig'];
        }

        return $model;
    }
}
