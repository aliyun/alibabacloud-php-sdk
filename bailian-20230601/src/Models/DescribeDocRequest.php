<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class DescribeDocRequest extends Model
{
    /**
     * @example 2818xxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 8C8FxxxxC3EE
     *
     * @var string
     */
    public $docId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'docId'    => 'DocId',
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
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }

        return $model;
    }
}
