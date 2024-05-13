<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ImportInterveneFileRequest extends Model
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
     * @example import.xls
     *
     * @var string
     */
    public $docName;

    /**
     * @example import.xsl
     *
     * @var string
     */
    public $fileKey;

    /**
     * @example http://xxx/xxx.xls
     *
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'docName'  => 'DocName',
        'fileKey'  => 'FileKey',
        'fileUrl'  => 'FileUrl',
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
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }
        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportInterveneFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }
        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
