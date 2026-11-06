<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateExportTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $exportFields;

    /**
     * @var string
     */
    public $queryParamJson;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'exportFields' => 'ExportFields',
        'queryParamJson' => 'QueryParamJson',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->exportFields)) {
            Model::validateArray($this->exportFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportFields) {
            if (\is_array($this->exportFields)) {
                $res['ExportFields'] = [];
                $n1 = 0;
                foreach ($this->exportFields as $item1) {
                    $res['ExportFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryParamJson) {
            $res['QueryParamJson'] = $this->queryParamJson;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['ExportFields'])) {
            if (!empty($map['ExportFields'])) {
                $model->exportFields = [];
                $n1 = 0;
                foreach ($map['ExportFields'] as $item1) {
                    $model->exportFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryParamJson'])) {
            $model->queryParamJson = $map['QueryParamJson'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
