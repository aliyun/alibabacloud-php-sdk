<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybookNodesOutputResponseBody\playbookNodesOutput;
use AlibabaCloud\Tea\Model;

class DescribePlaybookNodesOutputResponseBody extends Model
{
    /**
     * @var playbookNodesOutput
     */
    public $playbookNodesOutput;

    /**
     * @example A491170C-FE1F-520E-83D4-72ED205B72ED
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'playbookNodesOutput' => 'PlaybookNodesOutput',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookNodesOutput) {
            $res['PlaybookNodesOutput'] = null !== $this->playbookNodesOutput ? $this->playbookNodesOutput->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlaybookNodesOutputResponseBody
     */
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
