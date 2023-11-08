<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
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
    public $model;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'model'    => 'Model',
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
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
