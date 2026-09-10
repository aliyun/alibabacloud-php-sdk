<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class PostInnerUploadConvertPackageRequest extends Model
{
    /**
     * @var string
     */
    public $fileContentBase64;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'fileContentBase64' => 'fileContentBase64',
        'fileName' => 'fileName',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileContentBase64) {
            $res['fileContentBase64'] = $this->fileContentBase64;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['fileContentBase64'])) {
            $model->fileContentBase64 = $map['fileContentBase64'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
