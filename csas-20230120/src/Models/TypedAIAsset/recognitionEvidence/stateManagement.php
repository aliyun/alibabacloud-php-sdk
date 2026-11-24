<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset\recognitionEvidence;

use AlibabaCloud\Dara\Model;

class stateManagement extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $sourcePath;
    protected $_name = [
        'content' => 'content',
        'sourcePath' => 'source_path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->sourcePath) {
            $res['source_path'] = $this->sourcePath;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['source_path'])) {
            $model->sourcePath = $map['source_path'];
        }

        return $model;
    }
}
