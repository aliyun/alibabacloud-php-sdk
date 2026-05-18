<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class UpsertDocumentChunksRequest extends Model
{
    /**
     * @var string
     */
    public $chunks;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $kbUuid;
    protected $_name = [
        'chunks' => 'Chunks',
        'documentName' => 'DocumentName',
        'kbUuid' => 'KbUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            $res['Chunks'] = $this->chunks;
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
        if (isset($map['Chunks'])) {
            $model->chunks = $map['Chunks'];
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
