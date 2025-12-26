<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\KnowledgeBaseFileChunk;

use AlibabaCloud\Dara\Model;

class metaData extends Model
{
    /**
     * @var string
     */
    public $fileMetaId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileUri;
    protected $_name = [
        'fileMetaId' => 'FileMetaId',
        'fileName' => 'FileName',
        'fileUri' => 'FileUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileMetaId) {
            $res['FileMetaId'] = $this->fileMetaId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUri) {
            $res['FileUri'] = $this->fileUri;
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
        if (isset($map['FileMetaId'])) {
            $model->fileMetaId = $map['FileMetaId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUri'])) {
            $model->fileUri = $map['FileUri'];
        }

        return $model;
    }
}
