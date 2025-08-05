<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateEcdReportTaskRequest\filterList;

class CreateEcdReportTaskRequest extends Model
{
    /**
     * @var filterList[]
     */
    public $filterList;

    /**
     * @var string
     */
    public $langType;

    /**
     * @var string
     */
    public $reportFileName;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'filterList' => 'FilterList',
        'langType' => 'LangType',
        'reportFileName' => 'ReportFileName',
        'subType' => 'SubType',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->filterList)) {
            Model::validateArray($this->filterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterList) {
            if (\is_array($this->filterList)) {
                $res['FilterList'] = [];
                $n1 = 0;
                foreach ($this->filterList as $item1) {
                    $res['FilterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->langType) {
            $res['LangType'] = $this->langType;
        }

        if (null !== $this->reportFileName) {
            $res['ReportFileName'] = $this->reportFileName;
        }

        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n1 = 0;
                foreach ($map['FilterList'] as $item1) {
                    $model->filterList[$n1] = filterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LangType'])) {
            $model->langType = $map['LangType'];
        }

        if (isset($map['ReportFileName'])) {
            $model->reportFileName = $map['ReportFileName'];
        }

        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
