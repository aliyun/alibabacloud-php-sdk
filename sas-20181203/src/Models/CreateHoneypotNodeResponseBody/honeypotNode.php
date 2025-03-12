<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateHoneypotNodeResponseBody;

use AlibabaCloud\Tea\Model;

class honeypotNode extends Model
{
    /**
     * @description The ID of the management node.
     *
     * @example 37a15ff1-3475-4897-aa6c-f7fd9122****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
