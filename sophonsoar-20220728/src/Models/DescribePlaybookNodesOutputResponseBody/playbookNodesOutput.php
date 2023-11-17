<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputResponseBody;

use AlibabaCloud\Tea\Model;

class playbookNodesOutput extends Model
{
    /**
     * @example DataFormat_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example {
     * }
     * @var string
     */
    public $nodeOutput;
    protected $_name = [
        'nodeName'   => 'NodeName',
        'nodeOutput' => 'NodeOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeOutput) {
            $res['NodeOutput'] = $this->nodeOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playbookNodesOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeOutput'])) {
            $model->nodeOutput = $map['NodeOutput'];
        }

        return $model;
    }
}
