<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\AddDocumentsRequest;

use AlibabaCloud\Dara\Model;

class dedup extends Model
{
    /**
     * @var bool
     */
    public $contentDedup;

    /**
     * @var bool
     */
    public $docNameDedup;
    protected $_name = [
        'contentDedup' => 'ContentDedup',
        'docNameDedup' => 'DocNameDedup',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentDedup) {
            $res['ContentDedup'] = $this->contentDedup;
        }

        if (null !== $this->docNameDedup) {
            $res['DocNameDedup'] = $this->docNameDedup;
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
        if (isset($map['ContentDedup'])) {
            $model->contentDedup = $map['ContentDedup'];
        }

        if (isset($map['DocNameDedup'])) {
            $model->docNameDedup = $map['DocNameDedup'];
        }

        return $model;
    }
}
