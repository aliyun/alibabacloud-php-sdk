<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\CreateApplicationRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example vpc-bp1q56trhtaq40vlq5ojm
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'id'       => 'Id',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
