<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $exportFileLink;

    /**
     * @var string
     */
    public $exportTaskId;

    /**
     * @var string
     */
    public $pptArtifactId;

    /**
     * @var string
     */
    public $pptProcessId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'exportFileLink' => 'ExportFileLink',
        'exportTaskId' => 'ExportTaskId',
        'pptArtifactId' => 'PptArtifactId',
        'pptProcessId' => 'PptProcessId',
        'query' => 'Query',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->exportFileLink)) {
            Model::validateArray($this->exportFileLink);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportFileLink) {
            if (\is_array($this->exportFileLink)) {
                $res['ExportFileLink'] = [];
                $n1 = 0;
                foreach ($this->exportFileLink as $item1) {
                    $res['ExportFileLink'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exportTaskId) {
            $res['ExportTaskId'] = $this->exportTaskId;
        }

        if (null !== $this->pptArtifactId) {
            $res['PptArtifactId'] = $this->pptArtifactId;
        }

        if (null !== $this->pptProcessId) {
            $res['PptProcessId'] = $this->pptProcessId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
        if (isset($map['ExportFileLink'])) {
            if (!empty($map['ExportFileLink'])) {
                $model->exportFileLink = [];
                $n1 = 0;
                foreach ($map['ExportFileLink'] as $item1) {
                    $model->exportFileLink[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExportTaskId'])) {
            $model->exportTaskId = $map['ExportTaskId'];
        }

        if (isset($map['PptArtifactId'])) {
            $model->pptArtifactId = $map['PptArtifactId'];
        }

        if (isset($map['PptProcessId'])) {
            $model->pptProcessId = $map['PptProcessId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
