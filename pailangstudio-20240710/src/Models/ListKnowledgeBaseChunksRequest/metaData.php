<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\ListKnowledgeBaseChunksRequest;

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
    public $fileUri;
    protected $_name = [
        'fileMetaId' => 'FileMetaId',
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

        if (isset($map['FileUri'])) {
            $model->fileUri = $map['FileUri'];
        }

        return $model;
    }
}
