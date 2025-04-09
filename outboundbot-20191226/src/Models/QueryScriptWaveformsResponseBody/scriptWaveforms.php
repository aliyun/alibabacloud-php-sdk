<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryScriptWaveformsResponseBody;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptWaveformId;
    protected $_name = [
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'scriptContent' => 'ScriptContent',
        'scriptId' => 'ScriptId',
        'scriptWaveformId' => 'ScriptWaveformId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
