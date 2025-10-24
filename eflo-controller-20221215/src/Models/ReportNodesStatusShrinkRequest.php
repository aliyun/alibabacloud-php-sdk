<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ReportNodesStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $issueCategory;

    /**
     * @var string
     */
    public $nodesShrink;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description' => 'Description',
        'endTime' => 'EndTime',
        'issueCategory' => 'IssueCategory',
        'nodesShrink' => 'Nodes',
        'reason' => 'Reason',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->issueCategory) {
            $res['IssueCategory'] = $this->issueCategory;
        }

        if (null !== $this->nodesShrink) {
            $res['Nodes'] = $this->nodesShrink;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IssueCategory'])) {
            $model->issueCategory = $map['IssueCategory'];
        }

        if (isset($map['Nodes'])) {
            $model->nodesShrink = $map['Nodes'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
