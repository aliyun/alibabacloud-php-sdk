<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsResponseBody;

use AlibabaCloud\Tea\Model;

class scriptWaveforms extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example 19ac2375-53e3-477f-abe9-6cd334227981
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 5da1f893-0ef5-4681-ab62-09c0510ff54a
     *
     * @var string
     */
    public $scriptWaveformId;
    protected $_name = [
        'fileId'           => 'FileId',
        'fileName'         => 'FileName',
        'scriptContent'    => 'ScriptContent',
        'scriptId'         => 'ScriptId',
        'scriptWaveformId' => 'ScriptWaveformId',
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
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptWaveformId) {
            $res['ScriptWaveformId'] = $this->scriptWaveformId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptWaveforms
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
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptWaveformId'])) {
            $model->scriptWaveformId = $map['ScriptWaveformId'];
        }

        return $model;
    }
}
