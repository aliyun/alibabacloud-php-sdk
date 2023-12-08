<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseDataRequest extends Model
{
    /**
     * @example b893e0167a3245f3b4a41fa08c0f37a0_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 95CBEA84096E4FB08439E1E710E17923
     *
     * @var string
     */
    public $dataId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'dataId'   => 'DataId',
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
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnterpriseDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
