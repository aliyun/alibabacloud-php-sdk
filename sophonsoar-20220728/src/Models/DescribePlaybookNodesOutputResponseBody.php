<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputResponseBody\playbookNodesOutput;

class DescribePlaybookNodesOutputResponseBody extends Model
{
    /**
     * @var playbookNodesOutput
     */
    public $playbookNodesOutput;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookNodesOutput' => 'PlaybookNodesOutput',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->playbookNodesOutput) {
            $this->playbookNodesOutput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playbookNodesOutput) {
            $res['PlaybookNodesOutput'] = null !== $this->playbookNodesOutput ? $this->playbookNodesOutput->toArray($noStream) : $this->playbookNodesOutput;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PlaybookNodesOutput'])) {
            $model->playbookNodesOutput = playbookNodesOutput::fromMap($map['PlaybookNodesOutput']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
