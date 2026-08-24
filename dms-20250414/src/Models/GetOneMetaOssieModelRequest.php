<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class GetOneMetaOssieModelRequest extends Model
{
    /**
     * @var string
     */
    public $docFormat;

    /**
     * @var string
     */
    public $knowledgeUuid;
    protected $_name = [
        'docFormat' => 'DocFormat',
        'knowledgeUuid' => 'KnowledgeUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docFormat) {
            $res['DocFormat'] = $this->docFormat;
        }

        if (null !== $this->knowledgeUuid) {
            $res['KnowledgeUuid'] = $this->knowledgeUuid;
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
        if (isset($map['DocFormat'])) {
            $model->docFormat = $map['DocFormat'];
        }

        if (isset($map['KnowledgeUuid'])) {
            $model->knowledgeUuid = $map['KnowledgeUuid'];
        }

        return $model;
    }
}
