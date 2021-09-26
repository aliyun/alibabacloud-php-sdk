<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetNodeTypeListInfoResponseBody\nodeTypeInfoList;

use AlibabaCloud\Tea\Model;

class nodeTypeInfo extends Model
{
    /**
     * @var string
     */
    public $nodeTypeName;

    /**
     * @var int
     */
    public $nodeType;
    protected $_name = [
        'nodeTypeName' => 'NodeTypeName',
        'nodeType'     => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeTypeName) {
            $res['NodeTypeName'] = $this->nodeTypeName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTypeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeTypeName'])) {
            $model->nodeTypeName = $map['NodeTypeName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
