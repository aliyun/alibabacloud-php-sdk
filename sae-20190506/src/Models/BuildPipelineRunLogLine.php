<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class BuildPipelineRunLogLine extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $offset;
    protected $_name = [
        'content' => 'Content',
        'offset' => 'Offset',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        return $model;
    }
}
