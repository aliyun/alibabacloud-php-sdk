<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class UploadScriptRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example cab_script_recording/upload/88a56c18-3dc8-4338-9116-911deb169780/hello.wav
     *
     * @var string
     */
    public $fileId;

    /**
     * @example hello.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example c209abb3-6804-4a75-b2c7-dd55c8c61b6a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'content'    => 'Content',
        'fileId'     => 'FileId',
        'fileName'   => 'FileName',
        'instanceId' => 'InstanceId',
        'scriptId'   => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadScriptRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
