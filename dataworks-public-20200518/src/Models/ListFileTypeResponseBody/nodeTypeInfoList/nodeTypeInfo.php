<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFileTypeResponseBody\nodeTypeInfoList;

use AlibabaCloud\Tea\Model;

class nodeTypeInfo extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $nodeType;

    /**
     * @example ODPS SQL
     *
     * @var string
     */
    public $nodeTypeName;
    protected $_name = [
        'nodeType'     => 'NodeType',
        'nodeTypeName' => 'NodeTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return nodeTypeInfo
     */
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
