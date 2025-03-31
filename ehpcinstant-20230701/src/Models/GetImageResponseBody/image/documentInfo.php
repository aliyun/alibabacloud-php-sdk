<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetImageResponseBody\image;

use AlibabaCloud\Dara\Model;

class documentInfo extends Model
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $encodingMode;
    protected $_name = [
        'document' => 'Document',
        'documentId' => 'DocumentId',
        'encodingMode' => 'EncodingMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->document) {
            $res['Document'] = $this->document;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->encodingMode) {
            $res['EncodingMode'] = $this->encodingMode;
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
        if (isset($map['Document'])) {
            $model->document = $map['Document'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['EncodingMode'])) {
            $model->encodingMode = $map['EncodingMode'];
        }

        return $model;
    }
}
