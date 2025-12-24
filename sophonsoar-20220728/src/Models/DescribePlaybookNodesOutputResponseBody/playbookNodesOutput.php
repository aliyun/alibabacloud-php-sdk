<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputResponseBody;

use AlibabaCloud\Dara\Model;

class playbookNodesOutput extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeOutput;
    protected $_name = [
        'nodeName' => 'NodeName',
        'nodeOutput' => 'NodeOutput',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
