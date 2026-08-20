<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInspectionTaskReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInspectionTaskReportResponseBody\data\summary;

class data extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $markdownText;

    /**
     * @var string
     */
    public $reportLanguage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'markdownText' => 'MarkdownText',
        'reportLanguage' => 'ReportLanguage',
        'status' => 'Status',
        'summary' => 'Summary',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->markdownText) {
            $res['MarkdownText'] = $this->markdownText;
        }

        if (null !== $this->reportLanguage) {
            $res['ReportLanguage'] = $this->reportLanguage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MarkdownText'])) {
            $model->markdownText = $map['MarkdownText'];
        }

        if (isset($map['ReportLanguage'])) {
            $model->reportLanguage = $map['ReportLanguage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
