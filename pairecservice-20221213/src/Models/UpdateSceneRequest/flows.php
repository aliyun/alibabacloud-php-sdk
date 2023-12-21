<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateSceneRequest;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @example liuliang1
     *
     * @var string
     */
    public $flowCode;

    /**
     * @example 流量1
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'flowCode' => 'FlowCode',
        'flowName' => 'FlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
