<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateDocumentAnalyzeTaskRequest;

use AlibabaCloud\Dara\Model;

class strategy extends Model
{
    /**
     * @var bool
     */
    public $enableSemantic;
    protected $_name = [
        'enableSemantic' => 'enable_semantic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSemantic) {
            $res['enable_semantic'] = $this->enableSemantic;
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
        if (isset($map['enable_semantic'])) {
            $model->enableSemantic = $map['enable_semantic'];
        }

        return $model;
    }
}
