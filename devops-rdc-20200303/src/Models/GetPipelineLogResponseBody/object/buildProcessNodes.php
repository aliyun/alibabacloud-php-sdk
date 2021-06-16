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
     * @var int
     */
    public $nodeIndex;

    /**
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'status'    => 'Status',
        'nodeIndex' => 'NodeIndex',
        'nodeName'  => 'NodeName',
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
        if (null !== $this->nodeIndex) {
            $res['NodeIndex'] = $this->nodeIndex;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['NodeIndex'])) {
            $model->nodeIndex = $map['NodeIndex'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}
