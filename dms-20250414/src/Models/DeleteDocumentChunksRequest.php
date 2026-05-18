<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteDocumentChunksRequest extends Model
{
    /**
     * @var string[]
     */
    public $chunkIds;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $kbUuid;
    protected $_name = [
        'chunkIds' => 'ChunkIds',
        'documentName' => 'DocumentName',
        'kbUuid' => 'KbUuid',
    ];

    public function validate()
    {
        if (\is_array($this->chunkIds)) {
            Model::validateArray($this->chunkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIds) {
            if (\is_array($this->chunkIds)) {
                $res['ChunkIds'] = [];
                $n1 = 0;
                foreach ($this->chunkIds as $item1) {
                    $res['ChunkIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }

        if (null !== $this->kbUuid) {
            $res['KbUuid'] = $this->kbUuid;
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
        if (isset($map['ChunkIds'])) {
            if (!empty($map['ChunkIds'])) {
                $model->chunkIds = [];
                $n1 = 0;
                foreach ($map['ChunkIds'] as $item1) {
                    $model->chunkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }

        if (isset($map['KbUuid'])) {
            $model->kbUuid = $map['KbUuid'];
        }

        return $model;
    }
}
