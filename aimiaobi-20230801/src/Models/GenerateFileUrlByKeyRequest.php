<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GenerateFileUrlByKeyRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example oss://default/oss-bucket-name/aimiaobi/2021/07/01/1625126400000/1.docx
     *
     * @var string
     */
    public $fileKey;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'fileKey'  => 'FileKey',
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
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateFileUrlByKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        return $model;
    }
}
