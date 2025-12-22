<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponseBody\data\mediaDetectionTaskResult;

use AlibabaCloud\Dara\Model;

class fileInfo extends Model
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
    public $fileTraceId;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'fileId' => 'fileId',
        'fileName' => 'fileName',
        'fileTraceId' => 'fileTraceId',
        'ossKey' => 'ossKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileTraceId) {
            $res['fileTraceId'] = $this->fileTraceId;
        }

        if (null !== $this->ossKey) {
            $res['ossKey'] = $this->ossKey;
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
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileTraceId'])) {
            $model->fileTraceId = $map['fileTraceId'];
        }

        if (isset($map['ossKey'])) {
            $model->ossKey = $map['ossKey'];
        }

        return $model;
    }
}
