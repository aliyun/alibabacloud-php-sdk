<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $fileDescription;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'fileDescription' => 'FileDescription',
        'fileKey' => 'FileKey',
        'fileName' => 'FileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
