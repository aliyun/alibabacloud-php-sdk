<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\RetrievalKnowledgeBaseResponseBody\results;

use AlibabaCloud\Dara\Model;

class imageResources extends Model
{
    /**
     * @var int
     */
    public $documentIndex;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $itemRef;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'documentIndex' => 'DocumentIndex',
        'id' => 'Id',
        'itemRef' => 'ItemRef',
        'mimeType' => 'MimeType',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentIndex) {
            $res['DocumentIndex'] = $this->documentIndex;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->itemRef) {
            $res['ItemRef'] = $this->itemRef;
        }

        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['DocumentIndex'])) {
            $model->documentIndex = $map['DocumentIndex'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ItemRef'])) {
            $model->itemRef = $map['ItemRef'];
        }

        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
