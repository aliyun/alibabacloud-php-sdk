<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GenerateUploadConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example test.docx
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example datasetUpload
     *
     * @var string
     */
    public $parentDir;
    protected $_name = [
        'agentKey'  => 'AgentKey',
        'fileName'  => 'FileName',
        'parentDir' => 'ParentDir',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->parentDir) {
            $res['ParentDir'] = $this->parentDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUploadConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['ParentDir'])) {
            $model->parentDir = $map['ParentDir'];
        }

        return $model;
    }
}
