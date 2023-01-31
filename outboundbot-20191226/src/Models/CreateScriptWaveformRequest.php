<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateScriptWaveformRequest extends Model
{
    /**
     * @example UPLOADED_RECORDING/174952ab-9825-4cc9-a5e2-de82d7fa4cdd//fe7b3bc7-c0f4-4422-80cf-5a24f64268a0_mybank-debt-inbound-prompt.wav
     *
     * @var string
     */
    public $fileId;

    /**
     * @example mybank-debt-inbound-prompt.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 174952ab-9825-4cc9-a5e2-de82d7fa4cdd
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example 5d30e0e8-cfe8-411c-b177-d0858a34b62d
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'fileId'        => 'FileId',
        'fileName'      => 'FileName',
        'instanceId'    => 'InstanceId',
        'scriptContent' => 'ScriptContent',
        'scriptId'      => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScriptWaveformRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
