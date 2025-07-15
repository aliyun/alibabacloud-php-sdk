<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateEcdReportTaskRequest\filterList;
use AlibabaCloud\Tea\Model;

class CreateEcdReportTaskRequest extends Model
{
    /**
     * @var filterList[]
     */
    public $filterList;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $langType;

    /**
     * @var string
     */
    public $reportFileName;

    /**
     * @description This parameter is required.
     *
     * @example DESKTOP
     *
     * @var string
     */
    public $subType;

    /**
     * @description This parameter is required.
     *
     * @example RESOURCE_REPORT
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterList) {
            $res['FilterList'] = [];
            if (null !== $this->filterList && \is_array($this->filterList)) {
                $n = 0;
                foreach ($this->filterList as $item) {
                    $res['FilterList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateEcdReportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n = 0;
                foreach ($map['FilterList'] as $item) {
                    $model->filterList[$n++] = null !== $item ? filterList::fromMap($item) : $item;
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
