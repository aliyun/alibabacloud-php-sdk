<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ChangeNodeTypesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $nodeIdsShrink;

    /**
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'nodeIdsShrink' => 'NodeIds',
        'nodeType' => 'NodeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeIdsShrink) {
            $res['NodeIds'] = $this->nodeIdsShrink;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (isset($map['NodeIds'])) {
            $model->nodeIdsShrink = $map['NodeIds'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
