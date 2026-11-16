<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventNodesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $nodeDetail;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeSummary;

    /**
     * @var string
     */
    public $nodeTag;

    /**
     * @var int
     */
    public $occurredAt;
    protected $_name = [
        'nodeDetail' => 'NodeDetail',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeSummary' => 'NodeSummary',
        'nodeTag' => 'NodeTag',
        'occurredAt' => 'OccurredAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeDetail) {
            $res['NodeDetail'] = $this->nodeDetail;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeSummary) {
            $res['NodeSummary'] = $this->nodeSummary;
        }

        if (null !== $this->nodeTag) {
            $res['NodeTag'] = $this->nodeTag;
        }

        if (null !== $this->occurredAt) {
            $res['OccurredAt'] = $this->occurredAt;
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
        if (isset($map['NodeDetail'])) {
            $model->nodeDetail = $map['NodeDetail'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeSummary'])) {
            $model->nodeSummary = $map['NodeSummary'];
        }

        if (isset($map['NodeTag'])) {
            $model->nodeTag = $map['NodeTag'];
        }

        if (isset($map['OccurredAt'])) {
            $model->occurredAt = $map['OccurredAt'];
        }

        return $model;
    }
}
