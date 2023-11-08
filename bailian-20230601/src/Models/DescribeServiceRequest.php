<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098beee5_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example bailian-qwen-basic-v1-ft-202307111653-d2d7dbff
     *
     * @var string
     */
    public $modelServiceId;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'modelServiceId' => 'ModelServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        return $model;
    }
}
