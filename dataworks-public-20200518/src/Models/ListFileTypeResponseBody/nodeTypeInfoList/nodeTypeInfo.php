<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody\nodeTypeInfoList;

use AlibabaCloud\Dara\Model;

class nodeTypeInfo extends Model
{
    /**
     * @var int
     */
    public $nodeType;

    /**
     * @var string
     */
    public $nodeTypeName;
    protected $_name = [
        'nodeType' => 'NodeType',
        'nodeTypeName' => 'NodeTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->nodeTypeName) {
            $res['NodeTypeName'] = $this->nodeTypeName;
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
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['NodeTypeName'])) {
            $model->nodeTypeName = $map['NodeTypeName'];
        }

        return $model;
    }
}
