<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetPipelineLogResponseBody\object;

use AlibabaCloud\Tea\Model;

class buildProcessNodes extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $nodeIndex;
    protected $_name = [
        'status'    => 'Status',
        'nodeName'  => 'NodeName',
        'nodeIndex' => 'NodeIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeIndex) {
            $res['NodeIndex'] = $this->nodeIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildProcessNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeIndex'])) {
            $model->nodeIndex = $map['NodeIndex'];
        }

        return $model;
    }
}
